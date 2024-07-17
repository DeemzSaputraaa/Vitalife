<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\yoga; // Pastikan model Spa sudah dibuat

class YogasController extends Controller
{
    public function index()
    {
        $yogas = Yoga::all();
        return view('admin.yogas.index', compact('yogas'));
    }

    public function edit($id)
    {
        $yoga = Yoga::findOrFail($id);
        return view('admin.yogas.edit', compact('yogas'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk update spa
    }

    public function destroy($id)
    {
        $yoga = Spa::findOrFail($id);
        $yoga->delete();
        return redirect()->route('admin.yogas.index')->with('success', 'yoga berhasil dihapus');
    }
}
