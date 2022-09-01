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

   
    public function create()
    {
        return view('products.create');
    }

    
    public function store(StoreProductRequest $product)
    {
        $mensaje = $product = Product::create([

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
        if($mensaje)
        {
            toast('Producto agregado','success');
            
        }else{
            toast('Producto no agregado','warning');
        }

        return redirect()->route('products.index');
    }

   
    public function show(Product $product)
    {
        //
    }

   
    public function edit(Product $product)
    {
        return View('products.edit' , compact('product'));
    }

    
    public function update(UpdateProductRequest $request, Product $product)
    {
        $mensaje = $product->update([
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
        if($mensaje)
        {
            toast('Producto actualizado','success');
            
        }else{
            toast('Producto no actualizado','warning');
        }
        return redirect()->route('products.index');
    }

   
    public function destroy(Product $product)
    {
        $mensaje = $product->delete();
        if($mensaje)
        {
            toast('Producto eliminado','success');
            
        }else{
            toast('Producto no eliminado','warning');
        }
        return redirect()->route('products.index');
    }
}
