<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemClientRequest;
use App\Http\Requests\UpdateItemClientRequest;
use App\Models\ItemClient;

class ItemClientController extends Controller
{
    
    public function index()
    {
        $itemClients = ItemClient::all();

        return View('itemClients.index' , compact('itemClients'));
    }

    
    public function create()
    {
        return view('itemClients.create');
    }


    public function store(StoreItemClientRequest $itemClient)
    {
        $itemClient = ItemClient::create([

            'nombre' => $itemClient->nombre,
            'fecha_isntalacion' => $itemClient->fecha_isntalacion,
            'descripcion' => $itemClient->descripcion,
            'obvervaciones' => $itemClient->obvervaciones,
            'branch_office_id' => $itemClient->branch_office_id
        ]);

        return redirect()->route('itemClients.index');
    }

    public function show(ItemClient $itemClient)
    {
        //
    }


    public function edit(ItemClient $itemClient)
    {
        return View('itemClients.edit' , compact('itemClient'));
    }

    
    public function update(UpdateItemClientRequest $request, ItemClient $itemClient)
    {
        $itemClient->update([
            'nombre' => $request->nombre,
            'fecha_isntalacion' => $request->fecha_isntalacion,
            'descripcion' => $request->descripcion,
            'obvervaciones' => $request->obvervaciones,
            'branch_office_id' => $request->branch_office_id
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
