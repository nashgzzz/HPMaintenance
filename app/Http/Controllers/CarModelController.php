<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;
use App\Models\CarModel;

class CarModelController extends Controller
{
   
    public function index()
    {
        $carsModels = CarModel::all();
       // dd($users);

        return View('carModel.index',compact('carsModels'));
    }

   
    public function create()
    {
        return view('carModel.create');
    }

 
    public function store(StoreCarModelRequest $carModel)
    {
        $mensaje = CarModel::create([
            'nombre' => $carModel->nombre,
            'brand_id' => $carModel->brand_id
        ]);

        if($mensaje)
        {
            toast('Modelo de auto agregado','success');
            
        }else{
            toast('Modelo de auto no agregado','warning');
        }
        
        return redirect()->route('carModels.index');
    }

 
    public function show(CarModel $carModel)
    {
        //
    }

  
    public function edit(CarModel $carModel)
    {
        return view('carModel.edit',compact('carModel'));
    }

  
    public function update(UpdateCarModelRequest $request, CarModel $carModel)
    {
        $mensaje = $carModel->update([
            'nombre' => $request->nombre,
            'brand_id' => $request->brand_id
        ]);
        if($mensaje)
        {
            toast('Modelo de auto actualizado','success');
            
        }else{
            toast('Modelo de auto no actualizado','warning');
        }
       
        return redirect()->route('carModels.index');
    }

 
    public function destroy(CarModel $carModel)
    {
        $mensaje = $carModel->delete();
        
        if($mensaje)
        {
            toast('Modelo de auto eliminado','success');
            
        }else{
            toast('Modelo de auto no eliminado','warning');
        }
       
        return redirect()->route('carModels.index');
    }
}
