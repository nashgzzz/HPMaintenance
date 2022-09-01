<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Adress;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;

class StoreController extends Controller
{
   
    public function index()
    {
        $stores = Store::all();
       //dd($stores[0]->products);

        return View('stores.index',compact('stores'));
    }

 
    public function create()
    {
        return View('stores.create');
    }

    public function store(StoreStoreRequest $store)
    {

        $adress = Adress::create([
            'nombre' => $store->adress,
        ]);


        $mensaje = Store::create([
            'nombre' => $store->nombre,
            'adress_id' => $adress->id
        ]);
        if($mensaje)
        {
            toast('Local agregado','success');
            
        }else{
            toast('Local no agregado','warning');
        }
        return redirect()->route('stores.index');
    }

  
    public function show(Store $store)
    {
        //
    }

   
    public function edit(Store $store)
    {
        return view('stores.edit',compact('store'));
    }

   
    public function update(UpdateStoreRequest $request, Store $store)
    {
    
        $mensaje = $store->update([
            'nombre' => $request->nombre,
            'adress_id' => $request->adress_id
        ]);
        if($mensaje)
        {
            toast('Local actualizado','success');
            
        }else{
            toast('Local no actualizado','warning');
        }
        return redirect()->route('stores.index');
    }

 
    public function destroy(Store $store)
    {
        $mensaje = $store->delete();
        if($mensaje)
        {
            toast('Local eliminado','success');
            
        }else{
            toast('Local no eliminado','warning');
        }
        return redirect()->route('stores.index');
    }
}
