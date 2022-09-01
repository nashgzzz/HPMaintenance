<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Inventory;

class InventoryController extends Controller
{
   
    public function index()
    {
        $inventories = Inventory::all();
       
 
        return View('inventories.index',compact('inventories'));
    }

    
    public function create()
    {
        return View('inventories.create');
    
    }

    public function store(StoreInventoryRequest $inventory)
    {
        $mensaje = Inventory::create([
            'nombre' => $inventory->nombre,
            'descripcion' => $inventory->descripcion,
            'mail' => $inventory->mail
        ]);

        if($mensaje)
        {
            toast('Inventario agregado','success');
            
        }else{
            toast('Inventario no agregado','warning');
        }

        return redirect()->route('inventories.index');
    
    }

  
    public function show(Inventory $inventory)
    {
        //
    }

    public function edit(Inventory $inventory)
    {
        return view('inventories.edit',compact('inventory'));
    }

    
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
       $mensaje =  $inventory->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'mail' => $request->mail
            
            
        ]);

        if($mensaje)
        {
            toast('Inventario actualizado','success');
            
        }else{
            toast('Inventario no actualizado','warning');
        }


        return redirect()->route('inventories.index');
    }

    
    public function destroy(Inventory $inventory)
    {
        $mensaje = $inventory->delete();
        if($mensaje)
        {
            toast('Inventario eliminado','success');
            
        }else{
            toast('Inventario no eliminado','warning');
        }

        return redirect()->route('inventories.index');
    }
}
