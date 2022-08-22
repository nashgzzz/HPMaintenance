<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('can:products.index')->only('index');
        $this->middleware('can:products.edit')->only('edit','update');
        $this->middleware('can:products.create')->only('create','store');
        $this->middleware('can:products.destroy')->only('destroy');
    }

    public function index()
    {
        $products = Product::all();

        return View('products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $product)
    {
        $product = Product::create([

            'nombre' => $product->nombre,
            'direccion' => $product->direccion,
            'serie' => $product->serie,
            'iva' => $product->iva,
            'precio' => $product->precio,
            'inventory_id' => $product->inventory_id,
            'supplier_id' => $product->supplier_id,
            'kind_products_id' => $product->kind_products_id,
            'store_id' => $product->store_id,
            'bodega_id' => $product->bodega_id
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return View('products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'serie' => $request->serie,
            'iva' => $request->iva,
            'precio' => $request->precio,
            'inventory_id' => $request->inventory_id,
            'supplier_id' => $request->supplier_id,
            'kind_products_id' => $request->kind_products_id,
            'store_id' => $request->store_id,
            'bodega_id' => $request->bodega_id
            ]
        );
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
