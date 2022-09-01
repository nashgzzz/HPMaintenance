<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdressRequest;
use App\Http\Requests\UpdateAdressRequest;
use App\Models\Adress;

class AdressController extends Controller
{
   
    public function index()
    {
        $adresses = Adress::all();
         return View('adress.index',compact('adresses'));
    }


    public function create()
    {
        return view('adress.create');
    }

    
    public function store(StoreAdressRequest $adress)
    {
        $mensaje = Adress::create([
            'nombre' => $adress->nombre
        ]);
        if($mensaje)
        {
            toast('Dirección agregada','success');
            
        }else{
            toast('Dirección no agregada','warning');
        }
        return redirect()->route('adress.index');
    }

  
    public function show(Adress $adress)
    {
        //
    }

   
    public function edit(Adress $adress)
    {
        return view('adress.edit',compact('adress'));
    }

    public function update(UpdateAdressRequest $request, Adress $adress)
    {
        $mensaje = $adress->update([
            'nombre' => $request->nombre
        ]);
        if($mensaje)
        {
            toast('Dirección actualizada','success');
            
        }else{
            toast('Dirección no actualizada','warning');
        }
        return redirect()->route('adress.index');
    }

  
    public function destroy(Adress $adress)
    {
       $mensaje =  $adress->delete();
        if($mensaje)
        {
            toast('Dirección eliminada','success');
            
        }else{
            toast('Dirección no eliminada','warning');
        }
        return redirect()->route('adress.index');
    }
}
