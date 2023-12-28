<?php

namespace App\Http\Controllers;

use App\Models\hse;
use Illuminate\Http\Request;

class HseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('about.hse', [
            "page" => "hse"
        ]);
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
    public function show(hse $hse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hse $hse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hse $hse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hse $hse)
    {
        //
    }
}
