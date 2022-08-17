<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReceptionRequest;
use App\Http\Requests\UpdateReceptionRequest;
use App\Models\Reception;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptions = Reception::all();
        // dd($users);
 
         return View('receptions.index',compact('receptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReceptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReceptionRequest $reception)
    {
        Reception::create([
            'nombre' => $reception->nombre,
            'descripcion' => $reception->descripcion,
            'fecha' => $reception->fecha,
            'user_id' =>$reception->user_id
        ]);

        return redirect()->route('receptions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function show(Reception $reception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function edit(Reception $reception)
    {
        return view('receptions.edit',compact('reception'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReceptionRequest  $request
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReceptionRequest $request, Reception $reception)
    {
        $reception->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'user_id' =>$request->user_id
        ]);
        return redirect()->route('receptions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reception $reception)
    {
        $reception->delete();
        return redirect()->route('receptions.index');
    }
}
