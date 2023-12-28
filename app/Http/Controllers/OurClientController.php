<?php

namespace App\Http\Controllers;

use App\Models\OurClient;
use Illuminate\Http\Request;

class OurClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ourclient', [
            "page" => "ourclient"
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
    public function show(OurClient $ourClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurClient $ourClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurClient $ourClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurClient $ourClient)
    {
        //
    }
}
