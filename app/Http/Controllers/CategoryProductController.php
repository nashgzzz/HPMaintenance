<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryProductRequest;
use App\Http\Requests\UpdateCategoryProductRequest;
use App\Models\CategoryProduct;

class CategoryProductController extends Controller
{
    
    public function index()
    {
        $categoryProducts = CategoryProduct::all();
        // dd($users);
         return View('categoryProducts.index',compact('categoryProducts'));
    }

  
    public function create()
    {
        return View('categoryProducts.create');
    }

   
    public function store(StoreCategoryProductRequest $categoryProduct)
    {
        $mensaje = CategoryProduct::create([
            'product_id' => $categoryProduct->product_id,
            'category_id' => $categoryProduct->category_id
        ]);
        if($mensaje)
        {
            toast('Categorias y producto agregada','success');
            
        }else{
            toast('Categorias y producto no agregada','warning');
        }
        return redirect()->route('categoryProducts.index');
    }


    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

 
    public function edit(CategoryProduct $categoryProduct)
    {
        return View('categoryProducts.edit',compact('categoryProduct'));
    }


    public function update(UpdateCategoryProductRequest $request, CategoryProduct $categoryProduct)
    {
        $mensaje = $categoryProduct->update([
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);

        if($mensaje)
        {
            toast('Categorias y producto actualizada','success');
            
        }else{
            toast('Categorias y producto no actualizada','warning');
        }
        return redirect()->route('categoryProducts.index');
    }


    public function destroy(CategoryProduct $categoryProduct)
    {
       $mensaje =  $categoryProduct->delete();
        if($mensaje)
        {
            toast('Categorias y producto eliminada','success');
            
        }else{
            toast('Categorias y producto no eliminada','warning');
        }
        return redirect()->route('categoryProducts.index');
    }
}
