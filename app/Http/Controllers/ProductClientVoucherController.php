<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductClientVoucherRequest;
use App\Http\Requests\UpdateproductClientVoucherRequest;
use App\Models\productClientVoucher;

class ProductClientVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productClientVouchers = productClientVoucher::all();
       
 
        return View('productClientVouchers.index',compact('productClientVouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productClientVouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductClientVoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductClientVoucherRequest $productClientVoucher)
    {
        productClientVoucher::create([
            'product_id'=> $productClientVoucher->product_id,
            'item_clients_id'=> $productClientVoucher->item_clients_id
        ]);

        return redirect()->route('productClientVouchers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productClientVoucher  $productClientVoucher
     * @return \Illuminate\Http\Response
     */
    public function show(productClientVoucher $productClientVoucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productClientVoucher  $productClientVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(productClientVoucher $productClientVoucher)
    {
        return view('productClientVouchers.edit',compact('productClientVoucher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductClientVoucherRequest  $request
     * @param  \App\Models\productClientVoucher  $productClientVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductClientVoucherRequest $request, productClientVoucher $productClientVoucher)
    {
        $productClientVoucher->update([
            'product_id'=> $request->product_id,
            'item_clients_id'=> $request->item_clients_id
        
        ]);
        return redirect()->route('productClientVouchers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productClientVoucher  $productClientVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(productClientVoucher $productClientVoucher)
    {
        $productClientVoucher->delete();
        return redirect()->route('productClientVouchers.index');
    }
}
