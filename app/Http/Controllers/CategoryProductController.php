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
        CategoryProduct::create([
            'product_id' => $categoryProduct->product_id,
            'category_id' => $categoryProduct->category_id
        ]);

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
        $categoryProduct->update([
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('categoryProducts.index');
    }


    public function destroy(CategoryProduct $categoryProduct)
    {
        $categoryProduct->delete();
        return redirect()->route('categoryProducts.index');
    }
}
