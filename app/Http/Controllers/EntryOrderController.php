<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntryOrderRequest;
use App\Http\Requests\UpdateEntryOrderRequest;
use App\Models\EntryOrder;

class EntryOrderController extends Controller
{
  
    public function index()
    {
        $entryOrders = EntryOrder::all();
       
 
        return View('entryOrders.index',compact('entryOrders'));
    }

  
    public function create()
    {
        return view('entryOrders.create');
    }

   
    public function store(StoreEntryOrderRequest $entryOrder)
    {
       $mensaje = $entryOrder = EntryOrder::create([

            'nombre' =>  $entryOrder->nombre,
            'detalle' =>  $entryOrder->detalle,
            'user_id' =>  auth()->user()->id
        ]);

        if($mensaje)
        {
            toast('Órden agregada','success');
            
        }else{
            toast('Órden no agregada','warning');
        }

        return redirect()->route('entryOrders.index');
    }


    public function show(EntryOrder $entryOrder)
    {
        //
    }

 
    public function edit(EntryOrder $entryOrder)
    {
        return View('entryOrders.edit' , compact('entryOrder'));
    }


    public function update(UpdateEntryOrderRequest $request, EntryOrder $entryOrder)
    {
        $mensaje = $entryOrder->update([
            'nombre' =>  $request->nombre,
            'detalle' =>  $request->detalle,
            'user_id' =>  auth()->user()->id
            ]
        );

        if($mensaje)
        {
            toast('Órden actualizada','success');
            
        }else{
            toast('Órden no actualizada','warning');
        }


        return redirect()->route('entryOrders.index');
    }

  
    public function destroy(EntryOrder $entryOrder)
    {
        $mensaje = $entryOrder->delete();

        if($mensaje)
        {
            toast('Órden eliminada','success');
            
        }else{
            toast('Órden no eliminada','warning');
        }


        return redirect()->route('entryOrders.index');
    }
}
