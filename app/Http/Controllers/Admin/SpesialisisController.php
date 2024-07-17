<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\spesialis; // Pastikan model Spa sudah dibuat

class SpesialisisController extends Controller
{
    public function index()
    {
        $spesialisis = Spesialis::all();
        return view('admin.spesialisis.index', compact('spesialisis'));
    }

    public function edit($id)
    {
        $spesialis = Spesialis::findOrFail($id);
        return view('admin.spesialis.edit', compact('spesialisis'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk update spa
    }

    public function destroy($id)
    {
        $spesialis = Spesialis::findOrFail($id);
        $spesialis->delete();
        return redirect()->route('admin.spesialisis.index')->with('success', 'spesialis berhasil dihapus');
    }
}
