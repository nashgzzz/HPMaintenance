<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::all();
       
 
        return View('inventories.index',compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('inventories.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInventoryRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit',compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventoryRequest  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
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
