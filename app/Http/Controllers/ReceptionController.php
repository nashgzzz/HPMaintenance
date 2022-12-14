<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReceptionRequest;
use App\Http\Requests\UpdateReceptionRequest;
use App\Models\Reception;

class ReceptionController extends Controller
{
   
    public function index()
    {
        $receptions = Reception::all();
        // dd($users);
 
         return View('receptions.index',compact('receptions'));
    }

    public function create()
    {
        return view('receptions.create');
    }

    
    public function store(StoreReceptionRequest $reception)
    {
        $mensaje = Reception::create([
            'nombre' => $reception->nombre,
            'descripcion' => $reception->descripcion,
            'fecha' => $reception->fecha,
            'bodega_sucursal_id' =>$reception->bodega_sucursal_id
        ]);
        if($mensaje)
        {
            toast('Recepción agregada','success');
            
        }else{
            toast('Recepción no agregada','warning');
        }
        return redirect()->route('receptions.index');
    }

   
    public function show(Reception $reception)
    {
        //
    }

    public function edit(Reception $reception)
    {
        return view('receptions.edit',compact('reception'));
    }

   
    public function update(UpdateReceptionRequest $request, Reception $reception)
    {
        $mensaje = $reception->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'bodega_sucursal_id' =>$request->bodega_sucursal_id
        ]);
        if($mensaje)
        {
            toast('Recepción actualizada','success');
            
        }else{
            toast('Recepción no actualizada','warning');
        }
        return redirect()->route('receptions.index');
    }

   
    public function destroy(Reception $reception)
    {
       $mensaje = $reception->delete();
        if($mensaje)
        {
            toast('Recepción eliminada','success');
            
        }else{
            toast('Recepción no eliminada','warning');
        }
        return redirect()->route('receptions.index');
    }
}
