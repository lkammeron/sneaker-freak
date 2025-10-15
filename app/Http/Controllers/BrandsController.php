<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = brands::all();
        return view('brands.index', compact('brands'));
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
    public function show(brandsController $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(brandsController $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, brandsController $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(brandsController $brands)
    {
        //
    }
}
