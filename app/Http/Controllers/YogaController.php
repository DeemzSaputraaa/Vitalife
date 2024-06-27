<?php

namespace App\Http\Controllers;

use App\Models\yoga;
use Illuminate\Http\Request;
use App\Models\AvailableTime;


class YogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yoga = Yoga::find(1); // assuming there is only one spa
        $availableTimes = AvailableTime::where('id', $yoga->id)->get();
        return view('yoga', compact('yoga', 'availableTimes'));
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
    public function show(yoga $yoga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(yoga $yoga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, yoga $yoga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(yoga $yoga)
    {
        //
    }
}
