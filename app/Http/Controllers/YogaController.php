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

    public function index()
    {
        $yogaTotal = Yoga::all();
        return view('admin.yogaIndex', compact('yogaTotal'));
    }

    public function create()
    {
        return view('admin.formyoga');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|integer',
            'alamat' => 'required',
            'noHP' => 'required'
        ]);

        Yoga::create($validatedData);

        return redirect()->route('admin.formyoga')->with('success', 'Data Yoga berhasil disimpan');
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
