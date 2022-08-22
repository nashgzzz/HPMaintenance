<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreordenEntregaBodegueroRequest;
use App\Http\Requests\UpdateordenEntregaBodegueroRequest;
use App\Models\ordenEntregaBodeguero;

class OrdenEntregaBodegueroController extends Controller
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
     * @param  \App\Http\Requests\StoreordenEntregaBodegueroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreordenEntregaBodegueroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ordenEntregaBodeguero  $ordenEntregaBodeguero
     * @return \Illuminate\Http\Response
     */
    public function show(ordenEntregaBodeguero $ordenEntregaBodeguero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ordenEntregaBodeguero  $ordenEntregaBodeguero
     * @return \Illuminate\Http\Response
     */
    public function edit(ordenEntregaBodeguero $ordenEntregaBodeguero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateordenEntregaBodegueroRequest  $request
     * @param  \App\Models\ordenEntregaBodeguero  $ordenEntregaBodeguero
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateordenEntregaBodegueroRequest $request, ordenEntregaBodeguero $ordenEntregaBodeguero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ordenEntregaBodeguero  $ordenEntregaBodeguero
     * @return \Illuminate\Http\Response
     */
    public function destroy(ordenEntregaBodeguero $ordenEntregaBodeguero)
    {
        //
    }
}
