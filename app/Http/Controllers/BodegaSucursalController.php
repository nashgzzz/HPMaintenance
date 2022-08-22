<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBodegaSucursalRequest;
use App\Http\Requests\UpdateBodegaSucursalRequest;
use App\Models\BodegaSucursal;

class BodegaSucursalController extends Controller
{
   
    public function index()
    {
        $bodegaSucursals = BodegaSucursal::all();
       
 
         return View('bodegaSucursals.index',compact('bodegaSucursals'));
    }

 
    public function create()
    {
        return view('bodegaSucursals.create');
    }


    public function store(StoreBodegaSucursalRequest $bodegaSucursal)
    {
        BodegaSucursal::create([
            'nombre' => $bodegaSucursal->nombre,
            'adress_id' => $bodegaSucursal->adress_id
        ]);

        return redirect()->route('bodegaSucursals.index');
    }


    public function show(BodegaSucursal $bodegaSucursal)
    {
        //
    }


    public function edit(BodegaSucursal $bodegaSucursal)
    {
        return view('bodegaSucursals.edit',compact('bodegaSucursal'));
    }


    public function update(UpdateBodegaSucursalRequest $request, BodegaSucursal $bodegaSucursal)
    {
        $bodegaSucursal->update([
            'nombre' => $request->nombre,
            'adress_id' => $request->adress_id
        ]);
        return redirect()->route('bodegaSucursals.index');
    }

    public function destroy(BodegaSucursal $bodegaSucursal)
    {
        $bodegaSucursal->delete();
        return redirect()->route('bodegaSucursals.index');
    }
}
