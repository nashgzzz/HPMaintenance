<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryProductRequest;
use App\Http\Requests\UpdateCategoryProductRequest;
use App\Models\CategoryProduct;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryProducts = CategoryProduct::all();
        // dd($users);
 
         return View('categoryProducts.index',compact('categoryProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('categoryProducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryProductRequest $categoryProduct)
    {
        CategoryProduct::create([
            'product_id' => $categoryProduct->product_id,
            'category_id' => $categoryProduct->category_id
        ]);

        return redirect()->route('categoryProducts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProduct $categoryProduct)
    {
        return View('categoryProducts.edit',compact('categoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryProductRequest  $request
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryProductRequest $request, CategoryProduct $categoryProduct)
    {
        $categoryProduct->update([
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('categoryProducts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $categoryProduct)
    {
        $categoryProduct->delete();
        return redirect()->route('categoryProducts.index');
    }
}
