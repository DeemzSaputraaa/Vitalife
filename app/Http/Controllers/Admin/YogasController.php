<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\yoga; // Pastikan model Spa sudah dibuat
use App\Models\spa;

class YogasController extends Controller
{
    public function index()
    {
        $yogas = Yoga::all();
        return view('admin.yogas.index', compact('yogas'));
    }

    public function edit($id_yoga)
    {
        $yoga = Yoga::findOrFail($id_yoga);
        return view('admin.yogas.edit', compact('yoga'));
    }

    public function update(Request $request, $id_yoga)
    {
        $yoga = Yoga::findOrFail($id_yoga);
        $yoga->maps = $request->input('maps');
        $yoga->save();
        $yoga->update($request->all());
        return redirect()->route('admin.yogas.index')->with('success', 'Yoga berhasil diperbarui');
    }

    public function destroy($id_yoga)
    {
        $yoga = Yoga::findOrFail($id_yoga);
        $yoga->delete();
        return redirect()->route('admin.yogas.index')->with('success', 'Yoga berhasil dihapus');
    }
}
