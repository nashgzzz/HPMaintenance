<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        // dd($users);
 
         return View('category.index',compact('categories'));
    }

   
    public function create()
    {
        return View('category.create');
    }

    
    public function store(StoreCategoryRequest $category)
    {
        $mensaje = Category::create([
            'nombre' => $category->nombre
        ]);
        if($mensaje)
        {
            toast('Categoria agregada','success');
            
        }else{
            toast('Categoria no agregada','warning');
        }

        return redirect()->route('category.index');
    }

   
    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return View('category.edit',compact('category'));
    }

   
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $mensaje = $category->update([
            'nombre' => $request->nombre
        ]);
        if($mensaje)
        {
            toast('Categoria actualizada','success');
            
        }else{
            toast('Categoria no actualizada','warning');
        }
        return redirect()->route('category.index');

    }


    public function destroy(Category $category)
    {
        $mensaje = $category->delete();
        if($mensaje)
        {
            toast('Categoria eliminada','success');
            
        }else{
            toast('Categoria no eliminada','warning');
        }
        return redirect()->route('category.index');
    }
}
