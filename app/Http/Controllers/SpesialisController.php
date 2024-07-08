<?php

namespace App\Http\Controllers;

use App\Models\spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{

    public function showSpes()
    {
        $spesLihat = spesialis::all();
        return view('fitur.spesialis', compact('spesLihat'));
    }

    public function spesFilter(Request $request){
        $spes = $request->input('spesialisasi');
        $spesFilter = spesialis::where('nama', 'like', '%'.$spes.'%')->get();
        return view('fitur.spesialisFilter', compact('spesFilter'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(spesialis $spesialis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(spesialis $spesialis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, spesialis $spesialis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spesialis $spesialis)
    {
        //
    }
}
