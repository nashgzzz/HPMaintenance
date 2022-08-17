<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKindProductRequest;
use App\Http\Requests\UpdateKindProductRequest;
use App\Models\KindProduct;

class KindProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kindProducts = KindProduct::all();

        return View('kindProducts.index' , compact('kindProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kindProducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKindProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKindProductRequest $kindProduct)
    {
        $kindProduct = KindProduct::create([

            'nombre' => $kindProduct->nombre,
            'status' => $kindProduct->status,
        ]);

        return redirect()->route('kindProducts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KindProduct  $kindProduct
     * @return \Illuminate\Http\Response
     */
    public function show(KindProduct $kindProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KindProduct  $kindProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(KindProduct $kindProduct)
    {
        return View('kindProducts.edit' , compact('kindProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKindProductRequest  $request
     * @param  \App\Models\KindProduct  $kindProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKindProductRequest $request, KindProduct $kindProduct)
    {
        $kindProduct->update([
            'nombre' => $request->nombre,
            'status' => $request->status,
            ]
        );
        return redirect()->route('kindProducts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KindProduct  $kindProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(KindProduct $kindProduct)
    {
        $kindProduct->delete();
        return redirect()->route('kindProducts.index');
    }
}
