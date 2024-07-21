<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::all();
        return view('admin.voucher.index', compact('vouchers'));
    }

    public function create()
    {
        return view('admin.voucher.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'code' => 'required|string|unique:vouchers,code',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/vouchers'), $imageName);
            $validatedData['image'] = 'images/vouchers/' . $imageName;
        }

        try {
            $voucher = Voucher::create($validatedData);
            return redirect()->route('admin.vouchers.show', $voucher)->with('success', 'Voucher berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan voucher. Silakan coba lagi.');
        }
    }

    public function edit(Voucher $voucher)
    {
        return view('admin.voucher.edit', compact('voucher'));
    }

    public function show(Voucher $voucher)
    {
        return view('admin.voucher.show', compact('voucher'));
    }

    public function update(Request $request, Voucher $voucher)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'code' => 'required|string|unique:vouchers,code,' . $voucher->id,
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($voucher->image && file_exists(public_path($voucher->image))) {
                unlink(public_path($voucher->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/vouchers'), $imageName);
            $validatedData['image'] = 'images/vouchers/' . $imageName;
        }

        try {
            $voucher->update($validatedData);
            return redirect()->route('admin.vouchers.index')->with('success', 'Data voucher berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui data voucher. Silakan coba lagi.');
        }
    }

    public function destroy(Voucher $voucher)
    {
        Storage::disk('public')->delete($voucher->image);
        $voucher->delete();

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher deleted successfully.');
    }

    public function apply(Request $request)
    {
        $voucherCode = $request->input('voucher_code');

        $voucher = Voucher::where('code', $voucherCode)->first();

        if ($voucher) {
            // Memeriksa apakah voucher masih valid
            if ($voucher->expired_at && now() > $voucher->expired_at) {
                return redirect()->back()->with('voucher_error', 'Voucher sudah kadaluarsa.');
            }

            // Memeriksa apakah voucher sudah digunakan
            if ($voucher->is_used) {
                return redirect()->back()->with('voucher_error', 'Voucher sudah digunakan.');
            }

            // Memeriksa apakah voucher memiliki batas penggunaan
            if ($voucher->usage_limit && $voucher->usage_count >= $voucher->usage_limit) {
                return redirect()->back()->with('voucher_error', 'Batas penggunaan voucher sudah tercapai.');
            }

            // Menghitung potongan harga
            $discount = 0;
            if ($voucher->discount_type === 'percentage') {
                $discount = $request->input('total_price') * ($voucher->discount_value / 100);
            } else {
                $discount = $voucher->discount_value;
            }

            // Memastikan potongan tidak melebihi total harga
            $totalPrice = $request->input('total_price');
            $discountedPrice = max(0, $totalPrice - $discount);

            // Update penggunaan voucher
            $voucher->usage_count += 1;
            if ($voucher->usage_count >= $voucher->usage_limit) {
                $voucher->is_used = true;
            }
            $voucher->save();

            // Menyimpan informasi voucher dan potongan harga ke dalam session
            session([
                'applied_voucher' => $voucher->code,
                'discount_amount' => $discount,
                'discounted_price' => $discountedPrice
            ]);

            return redirect()->back()->with('voucher_success', 'Voucher berhasil diterapkan! Potongan harga: Rp ' . number_format($discount, 0, ',', '.'));
        } else {
            return redirect()->back()->with('voucher_error', 'Kode voucher tidak valid.');
        }
    }
}
