<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CarModel;
use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;

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

        $marcas = Brand::all();
        return view('carModel.create', compact('marcas'));

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
        $marcas = Brand::all();
        return view('carModel.edit',compact('carModel', 'marcas'));
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
