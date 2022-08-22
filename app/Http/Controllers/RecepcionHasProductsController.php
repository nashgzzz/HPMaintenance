<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerecepcionHasProductsRequest;
use App\Http\Requests\UpdaterecepcionHasProductsRequest;
use App\Models\recepcionHasProducts;

class RecepcionHasProductsController extends Controller
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
     * @param  \App\Http\Requests\StorerecepcionHasProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerecepcionHasProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recepcionHasProducts  $recepcionHasProducts
     * @return \Illuminate\Http\Response
     */
    public function show(recepcionHasProducts $recepcionHasProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recepcionHasProducts  $recepcionHasProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(recepcionHasProducts $recepcionHasProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterecepcionHasProductsRequest  $request
     * @param  \App\Models\recepcionHasProducts  $recepcionHasProducts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterecepcionHasProductsRequest $request, recepcionHasProducts $recepcionHasProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recepcionHasProducts  $recepcionHasProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(recepcionHasProducts $recepcionHasProducts)
    {
        //
    }
}
