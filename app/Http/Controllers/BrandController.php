<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    
    public function index()
    {
        $brands = Brand::all();
        return View('brands.index',compact('brands'));
        
    }

  
    public function create()
    {    
        
        return View('brands.create');
        
    }

   
    public function store(StoreBrandRequest $brand)
    {
        
        $mensaje = Brand::create([
            'nombre' => $brand->nombre
        ]);
        
        if($mensaje)
        {
            toast('Marca de auto agregada','success');
            
        }else{
            toast('Marca de auto no agregada','warning');
        }

        return redirect()->route('brands.index');
    }

  
    public function show(Brand $brand)
    {
        //
    }

 
    public function edit(Brand $brand)
    {
        return View('brands.edit',compact('brand'));
    }

    
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $mensaje = $brand->update([

            'nombre' => $request->nombre
        ]);

        if($mensaje)
        {
            toast('Marca de auto actualizada','success');
            
        }else{
            toast('Marca de auto no agregada','warning');
        }

        return redirect()->route('brands.index');
        
        
    }

    public function destroy(Brand $brand)
    {
       
        $mensaje = $brand->delete();

        if($mensaje)
        {
            toast('Marca de auto eliminada','success');
            
        }else{
            toast('Marca de auto no eliminada','warning');
        }

        return redirect()->route('brands.index');
    }
}
