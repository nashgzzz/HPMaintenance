<?php

namespace App\Http\Controllers;

use App\Models\ItemClient;
use App\Models\BodegaSucursal;
use App\Http\Requests\StoreItemClientRequest;
use App\Http\Requests\UpdateItemClientRequest;

class ItemClientController extends Controller
{
    
    public function index()
    {
        $itemClients = ItemClient::all();

        return View('itemClients.index' , compact('itemClients'));
    }

    
    public function create()
    {
        $bodegaSucursales = BodegaSucursal::all();
        return view('itemClients.create', compact('bodegaSucursales'));
    }


    public function store(StoreItemClientRequest $itemClient)
    {
        
        $itemClient = ItemClient::create([

            'nombre' => $itemClient->nombre,
            'fecha_isntalacion' => $itemClient->fecha_isntalacion,
            'descripcion' => $itemClient->descripcion,
            'obvervaciones' => $itemClient->obvervaciones,
            'bodega_sucursal_id' => $itemClient->bodega_sucursal_id
        ]);
        
        if($itemClient)
        {
            toast('Productos Cliente agregado','success');
            
        }else{
            toast('Producto Cliente no agregado','warning');
        }

        return redirect()->route('itemClients.index');

     
    }

    public function show(ItemClient $itemClient)
    {
        //
    }


    public function edit(ItemClient $itemClient)
    {
        $bodegaSucursales = BodegaSucursal::all();
        return View('itemClients.edit' , compact('itemClient' , 'bodegaSucursales'));
    }

    
    public function update(UpdateItemClientRequest $request, ItemClient $itemClient)
    {
        
        $itemClient->update([
            'nombre' => $request->nombre,
            'fecha_isntalacion' => $request->fecha_isntalacion,
            'descripcion' => $request->descripcion,
            'obvervaciones' => $request->obvervaciones,
            'bodega_sucursal_id' => $request->bodega_sucursal_id
            ]
        );
       

        return redirect()->route('itemClients.index');
    }


    public function destroy(ItemClient $itemClient)
    {
        $itemClient->delete();
        return redirect()->route('itemClients.index');
    }
}
