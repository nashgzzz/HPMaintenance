<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBodegaRequest;
use App\Http\Requests\UpdateBodegaRequest;
use App\Models\Bodega;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBodegaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBodegaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBodegaRequest  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBodegaRequest $request, Bodega $bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        //
    }
}
