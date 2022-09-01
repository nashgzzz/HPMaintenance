<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductClientVoucherRequest;
use App\Http\Requests\UpdateproductClientVoucherRequest;
use App\Models\productClientVoucher;

class ProductClientVoucherController extends Controller
{
    
    public function index()
    {
        $productClientVouchers = productClientVoucher::all();
       
 
        return View('productClientVouchers.index',compact('productClientVouchers'));
    }

    public function create()
    {
        return view('productClientVouchers.create');
    }

  
  
    public function store(StoreproductClientVoucherRequest $productClientVoucher)
    {
        $mensaje = productClientVoucher::create([
            'product_id'=> $productClientVoucher->product_id,
            'item_clients_id'=> $productClientVoucher->item_clients_id,
            'vouchers_id'=> $productClientVoucher->vouchers_id
        ]);
        if($mensaje)
        {
            toast('Voucher de productos del cliente agregado','success');
            
        }else{
            toast('Voucher de productos del cliente no agregado','warning');
        }

        return redirect()->route('productClientVouchers.index');
    }

   
    public function show(productClientVoucher $productClientVoucher)
    {
        //
    }

   
    public function edit(productClientVoucher $productClientVoucher)
    {
        return view('productClientVouchers.edit',compact('productClientVoucher'));
    }

    public function update(UpdateproductClientVoucherRequest $request, productClientVoucher $productClientVoucher)
    {
        $mensaje = $productClientVoucher->update([
            'product_id'=> $request->product_id,
            'item_clients_id'=> $request->item_clients_id,
            'vouchers_id'=> $request->vouchers_id
        
        ]);
        if($mensaje)
        {
            toast('Voucher de productos del cliente actualizado','success');
            
        }else{
            toast('Voucher de productos del cliente no actualizado','warning');
        }
        return redirect()->route('productClientVouchers.index');
    }

   
    public function destroy(productClientVoucher $productClientVoucher)
    {
        $mensaje = $productClientVoucher->delete();
        if($mensaje)
        {
            toast('Voucher de productos del cliente eliminado','success');
            
        }else{
            toast('Voucher de productos del cliente no eliminado','warning');
        }
        return redirect()->route('productClientVouchers.index');
    }
}
