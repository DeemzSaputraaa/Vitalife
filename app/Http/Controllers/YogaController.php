<?php

namespace App\Http\Controllers;

use App\Models\Yoga;
use Illuminate\Http\Request;

class YogaController extends Controller
{
    public function showYogas()
    {
        $yogaTotal = Yoga::all(); // Fetch all yoga data
        return view('fitur.yoga', compact('yogaTotal'));
    }

    public function yogaFilter(Request $request)
    {
        $yoga = $request->input('location');
        $yogaTotal = Yoga::where('alamat', 'like', "%$yoga%")->get();
        return view('fitur.yogaFilter', compact('yogaTotal'));
    }

    public function index(Request $request)
    {
        $query = Yoga::query();

        // Pencarian berdasarkan nama
        if ($request->has('nama')) {
            $query->where('nama', 'like', '%' . $request->nama . '%');
        }

        // Filter berdasarkan lokasi
        if ($request->has('location') && $request->location != '') {
            $query->where('alamat', 'like', '%' . $request->location . '%');
        }

        // Filter berdasarkan rentang harga
        if ($request->has('price_range') && $request->price_range != '') {
            list($min, $max) = explode('-', $request->price_range);
            $query->whereBetween('harga', [$min, $max === '+' ? PHP_INT_MAX : $max]);
        }

        $yogaTotal = $query->get();

        return view('fitur.yoga', compact('yogaTotal'));
    }

    public function create()
    {
        return view('admin.formyoga');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer',
            'alamat' => 'required|string',
            'noHP' => 'required|string',
            'waktuBuka' => 'required|array',
            'waktuBuka.*' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        try {
            $yoga = Yoga::create($validatedData);
            return redirect()->route('admin.spaShow', $yoga)->with('success', 'Data SPA berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data SPA. Silakan coba lagi.');
        }
    }

    public function show(Yoga $yoga)
    {
        return view('admin.yogaShow', compact('yoga'));
    }

    public function edit(Yoga $yoga)
    {
        return view('admin.yogaEdit', compact('yoga'));
    }

    public function update(Request $request, Yoga $yoga)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|integer',
            'alamat' => 'required',
            'noHP' => 'required'
        ]);

        $yoga->update($validatedData);

        return redirect()->route('admin.yogaIndex')->with('success', 'Data Yoga berhasil diperbarui');
    }

    public function destroy(Yoga $yoga)
    {
        $yoga->delete();
        return redirect()->route('admin.formyoga')->with('success', 'Data Yoga berhasil dihapus');
    }
}
