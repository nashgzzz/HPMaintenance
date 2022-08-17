<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntryOrderRequest;
use App\Http\Requests\UpdateEntryOrderRequest;
use App\Models\EntryOrder;

class EntryOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entryOrders = EntryOrder::all();
       
 
        return View('entryOrders.index',compact('entryOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entryOrders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntryOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntryOrderRequest $entryOrder)
    {
        $entryOrder = EntryOrder::create([

            'nombre' =>  $entryOrder->nombre,
            'detalle' =>  $entryOrder->detalle,
            'users_id' =>  $entryOrder->users_id
        ]);

        return redirect()->route('entryOrders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntryOrder  $entryOrder
     * @return \Illuminate\Http\Response
     */
    public function show(EntryOrder $entryOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntryOrder  $entryOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(EntryOrder $entryOrder)
    {
        return View('entryOrders.edit' , compact('entryOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntryOrderRequest  $request
     * @param  \App\Models\EntryOrder  $entryOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntryOrderRequest $request, EntryOrder $entryOrder)
    {
        $entryOrder->update([
            'nombre' =>  $request->nombre,
            'detalle' =>  $request->detalle,
            'users_id' =>  $request->users_id
            ]
        );
        return redirect()->route('entryOrders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntryOrder  $entryOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntryOrder $entryOrder)
    {
        $entryOrder->delete();
        return redirect()->route('entryOrders.index');
    }
}
