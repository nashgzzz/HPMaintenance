<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBodegaRequest;
use App\Http\Requests\UpdateBodegaRequest;
use App\Models\Bodega;

class BodegaController extends Controller
{
    
    public function index()
    {
        $bodegas = Bodega::all();
        return View('bodegas.index',compact('bodegas'));
    }

  
    public function create()
    {
        return view('bodegas.create');
    }

    public function store(StoreBodegaRequest $bodega)
    {
        $mensaje =  Bodega::create([
            'nombre' => $bodega->nombre
        ]);

        if($mensaje)
        {
            toast('Bodega agregada','success');
            
        }else{
            toast('Bodega no agregada','warning');
        }

        return redirect()->route('bodegas.index');
    }

    public function show(Bodega $bodega)
    {
        
    }

  
    public function edit(Bodega $bodega)
    {
        return view('bodegas.edit',compact('bodega'));
    }

    
    public function update(UpdateBodegaRequest $request, Bodega $bodega)
    {
        $mensaje = $bodega->update([
            'nombre' => $request->nombre
        ]);

        if($mensaje)
        {
            toast('Bodega actualizada','success');
            
        }else{
            toast('Bodega no actualizada','warning');
        }

        return redirect()->route('bodegas.index');
    }

    
    public function destroy(Bodega $bodega)

    {

        $mensaje = $bodega->delete();

        if($mensaje)
        {
            toast('Bodega eliminada','success');
            
        }else{
            toast('Bodega no eliminada','warning');
        }

        return redirect()->route('bodegas.index');
    }
}
