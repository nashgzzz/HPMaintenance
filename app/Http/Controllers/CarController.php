<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
       // dd($users);

        return View('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $car)
    {

        $mensaje = $car = Car::create([
            
            
            'nombre' => $car->nombre,
            'patente' => $car->patente,
            'color' => $car->color,
            'descripcion' => $car->descripcion,
            'car_models_id' => $car->car_models_id,
            'user_id' => auth()->user()->id
        ]);

        if($mensaje)
        {
            toast('Vehículo agregado','success');
            
        }else{
            toast('Vehículo no agregado','warning');
        }


        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarsRequest  $request
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {

        $mensaje = $car->update([
            'nombre' => $request->nombre,
            'patente' => $request->patente,
            'color' => $request->color,
            'descripcion' => $request->descripcion,
            'car_models_id' => $request->car_models_id,
            'user_id' => auth()->user()->id
            ]
        );
        if($mensaje)
        {
            toast('Vehículo actualizado','success');
            
        }else{
            toast('Vehículo no actualizado','warning');
        }
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $mensaje = $car->delete();
        if($mensaje)
        {
            toast('Vehículo eliminado','success');
            
        }else{
            toast('Vehículo no eliminado','warning');
        }

        return redirect()->route('cars.index');
    }
}
