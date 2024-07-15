<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spa; // Pastikan model Spa sudah dibuat

class SpasController extends Controller
{
    public function index()
    {
        $spas = Spa::all();
        // dd($spas); // Tambahkan ini untuk memeriksa struktur data
        return view('admin.spas.index', compact('spas'));
    }

    public function edit($id)
    {
        $spa = Spa::findOrFail($id);
        return view('admin.spas.edit', compact('spas'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk update spa
    }

    public function destroy($id)
    {
        $spa = Spa::findOrFail($id);
        $spa->delete();
        return redirect()->route('admin.spas.index')->with('success', 'Spa berhasil dihapus');
    }
}
