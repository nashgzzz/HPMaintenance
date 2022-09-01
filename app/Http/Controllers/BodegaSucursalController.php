<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\BodegaSucursal;
use App\Http\Requests\StoreBodegaSucursalRequest;
use App\Http\Requests\UpdateBodegaSucursalRequest;

class BodegaSucursalController extends Controller
{
   
    public function index()
    {
        $bodegaSucursals = BodegaSucursal::all();
       
 
         return View('bodegaSucursals.index',compact('bodegaSucursals'));
    }

 
    public function create()
    {
        $direcciones = Adress::all();
        return view('bodegaSucursals.create', compact('direcciones'));
    }


    public function store(StoreBodegaSucursalRequest $bodegaSucursal)
    {
        $adress = Adress::create([
            'nombre' => $bodegaSucursal->adress
        ]);

        $mensaje = BodegaSucursal::create([
            'nombre' => $bodegaSucursal->nombre,
            'adress_id' => $adress->id
        ]);
        if($mensaje)
        {
            toast('Bodega de sucursal agregada','success');
            
        }else{
            toast('Bodega de sucursal no agregada','warning');
        }

        return redirect()->route('bodegaSucursals.index');
    }


    public function show(BodegaSucursal $bodegaSucursal)
    {
        //
    }


    public function edit(BodegaSucursal $bodegaSucursal)
    {
        $direcciones = Adress::all();
        return view('bodegaSucursals.edit',compact('bodegaSucursal', 'direcciones'));
    }


    public function update(UpdateBodegaSucursalRequest $request, BodegaSucursal $bodegaSucursal)
    {

        
        $mensaje = $bodegaSucursal->update([
            'nombre' => $request->nombre,
            'adress_id' => $request->adress_id
        ]);
        if($mensaje)
        {
            toast('Bodega de sucursal actualizada','success');
            
        }else{
            toast('Bodega de sucursal no actualizada','warning');
        }

        return redirect()->route('bodegaSucursals.index');
    }

    public function destroy(BodegaSucursal $bodegaSucursal)
    {
        $mensaje = $bodegaSucursal->delete();
        if($mensaje)
        {
            toast('Bodega de sucursal eliminada','success');
            
        }else{
            toast('Bodega de sucursal no eliminada','warning');
        }
        return redirect()->route('bodegaSucursals.index');
    }
}
