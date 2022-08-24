<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdressRequest;
use App\Http\Requests\UpdateAdressRequest;
use App\Models\Adress;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adresses = Adress::all();
       
 
         return View('adress.index',compact('adresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdressRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Adress $adress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit(Adress $adress)
    {
        return view('adress.edit',compact('adress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdressRequest  $request
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
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
