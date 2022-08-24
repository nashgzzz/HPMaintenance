<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKindProductRequest;
use App\Http\Requests\UpdateKindProductRequest;
use App\Models\KindProduct;

class KindProductController extends Controller
{
  
    public function index()
    {
        $kindProducts = KindProduct::all();

        return View('kindProducts.index' , compact('kindProducts'));
    }

   
    public function create()
    {
        return view('kindProducts.create');
    }

  
    public function store(StoreKindProductRequest $kindProduct)
    {
        $mensaje = $kindProduct = KindProduct::create([

            'nombre' => $kindProduct->nombre,
            'status' => $kindProduct->status,
        ]);

        if($mensaje)
        {
            toast('Tipo de producto agregado','success');
            
        }else{
            toast('Tipo de producto no agregado','warning');
        }


        return redirect()->route('kindProducts.index');
    }

  
    public function show(KindProduct $kindProduct)
    {
        //
    }

  
    public function edit(KindProduct $kindProduct)
    {
        return View('kindProducts.edit' , compact('kindProduct'));
    }

 
    public function update(UpdateKindProductRequest $request, KindProduct $kindProduct)
    {
        $mensaje = $kindProduct->update([
            'nombre' => $request->nombre,
            'status' => $request->status,
            ]
        );

        if($mensaje)
        {
            toast('Tipo producto actualizado','success');
            
        }else{
            toast('Tipo de producto no actualizado','warning');
        }


        return redirect()->route('kindProducts.index');
    }

   
    public function destroy(KindProduct $kindProduct)
    {
        $mensaje = $kindProduct->delete();
        if($mensaje)
        {
            toast('Tipo de producto eliminado','success');
            
        }else{
            toast('Tipo de producto no eliminado','warning');
        }
        
        return redirect()->route('kindProducts.index');
    }
}
