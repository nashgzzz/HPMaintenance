<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;
use App\Models\CarModel;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carsModels = CarModel::all();
       // dd($users);

        return View('carModel.index',compact('carsModels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carModel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarModelRequest $carModel)
    {
        CarModel::create([
            'nombre' => $carModel->nombre,
            'brand_id' => $carModel->brand_id
        ]);

        return redirect()->route('carModels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        return view('carModel.edit',compact('carModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarModelRequest  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarModelRequest $request, CarModel $carModel)
    {
        $carModel->update([
            'nombre' => $request->nombre,
            'brand_id' => $request->brand_id
        ]);
        return redirect()->route('carModels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carModel)
    {
        $carModel->delete();
        return redirect()->route('carModels.index');
    }
}
