<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarModel;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
  
    public function index()
    {
        $cars = Car::all();
       // dd($users);

        return View('cars.index',compact('cars'));
    }

    public function create()
    {
        $modelo = CarModel::all();
        return View('cars.create', compact('modelo'));
    }

  
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

   
    public function show(Car $car)
    {
        //
    }

   
    public function edit(Car $car)
    {
        $modelo = CarModel::all();
        return view('cars.edit',compact('car','modelo'));
    }

    
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
