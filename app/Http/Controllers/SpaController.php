<?php

namespace App\Http\Controllers;

use App\Models\Spa;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function showSpas()
    {
        $spaTotal = Spa::all(); // Fetch all spa data
        return view('fitur.spa', compact('spaTotal'));
    }

    public function spaFilter(Request $request)
    {
        $spa = $request->input('location');
        $spaTotal = Spa::where('alamat', 'like', "%$spa%")->get();
        return view('fitur.spaFilter', compact('spaTotal'));
    }

    public function index()
    {
        $spaTotal = Spa::all();
        return view('admin.spaIndex', compact('spaTotal'));
    }

    public function create()
    {
        return view('admin.formspa');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'alamat' => 'required',
            'noHP' => 'required',
            'waktuBuka' => 'required'
        ]);

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
