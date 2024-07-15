<?php

namespace App\Http\Controllers;

use App\Models\Spa;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function dashboard()
    {
        $spaCount = Spa::count();
        return view('admin.dashboard', compact('spaCount'));
    }

    // public function search(Request $request)
    // {
    //     $query = Spa::query();

    //     if ($request->filled('location')) {
    //         $query->where('alamat', 'like', '%' . $request->location . '%');
    //     }

    //     if ($request->filled('min_price')) {
    //         $query->where('harga', '>=', $request->min_price);
    //     }

    //     if ($request->filled('max_price')) {
    //         $query->where('harga', '<=', $request->max_price);
    //     }

    //     switch ($request->sort) {
    //         case 'price-low-high':
    //             $query->orderBy('harga', 'asc');
    //             break;
    //         case 'price-high-low':
    //             $query->orderBy('harga', 'desc');
    //             break;
    //         case 'name-asc':
    //             $query->orderBy('nama', 'asc');
    //             break;
    //         case 'name-desc':
    //             $query->orderBy('nama', 'desc');
    //             break;
    //         default:
    //             $query->orderBy('id_spa', 'desc');
    //             break;
    //     }

    //     $spaTotal = $query->get();

    //     return view('spa', compact('spaTotal'));
    // }

    // public function showSpas()
    // {
    //     $spaTotal = Spa::all(); // Fetch all spa data
    //     return view('fitur.spa', compact('spaTotal'));
    // }

    // public function spaFilter(Request $request)
    // {
    //     $spa = $request->input('location');
    //     $spaTotal = Spa::where('alamat', 'like', "%$spa%")->get();
    //     return view('fitur.spaFilter', compact('spaTotal'));
    // }

    public function index(Request $request)
    {
        $query = Spa::query();
        $searchPerformed = false;
        $searchCriteria = [];

        if ($request->filled('location')) {
            $query->where('alamat', 'like', '%' . $request->location . '%');
            $searchPerformed = true;
            $searchCriteria[] = "lokasi: " . $request->location;
        }

        // Filter berdasarkan rentang harga
        if ($request->filled('min_price') || $request->filled('max_price')) {
            if ($request->filled('min_price')) {
                $query->where('harga', '>=', $request->min_price);
                $searchCriteria[] = "harga minimal: Rp " . number_format($request->min_price, 0, ',', '.');
            }
            if ($request->filled('max_price')) {
                $query->where('harga', '<=', $request->max_price);
                $searchCriteria[] = "harga maksimal: Rp " . number_format($request->max_price, 0, ',', '.');
            }
            $searchPerformed = true;
        }

        $spaTotal = $query->get();

        // Set status pencarian
        if ($searchPerformed) {
            $searchCriteriaString = implode(', ', $searchCriteria);
            if ($spaTotal->isEmpty()) {
                session()->flash('search_status', 'not_found');
                session()->flash('search_query', $searchCriteriaString);
            } else {
                session()->flash('search_status', 'success');
                session()->flash('search_query', $searchCriteriaString);
            }
        } else {
            session()->forget(['search_status', 'search_query']);
        }

        return view('fitur.spa', compact('spaTotal'));
    }

    public function create()
    {
        return view('admin.formspa');
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);


        // $spa = new Spa();
        // $spa->nama = $validatedData['nama'];
        // $spa->harga = $validatedData['harga'];
        // $spa->alamat = $validatedData['alamat'];
        // $spa->noHP = $validatedData['noHP'];
        // $spa->waktuBuka = $validatedData['waktuBuka'];
        // $spa->gambar = 'images/' . $imageName;
        // $spa->save();

        Spa::create($validatedData);

        return redirect()->route('admin.formspa')->with('success', 'Data SPA berhasil disimpan');
    }

    public function show(Spa $spa)
    {
        return view('admin.spaShow', compact('spa'));
    }

    public function edit(Spa $spa)
    {
        return view('admin.spaEdit', compact('spa'));
    }

    public function update(Request $request, Spa $spa)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'alamat' => 'required',
            'noHP' => 'required',
            'waktuBuka' => 'required'
        ]);

        $spa->update($validatedData);

        return redirect()->route('admin.spaIndex')->with('success', 'Data SPA berhasil diperbarui');
    }

    public function destroy(Spa $spa)
    {
        $spa->delete();
        return redirect()->route('admin.formspa')->with('success', 'Data SPA berhasil dihapus');
    }
}
