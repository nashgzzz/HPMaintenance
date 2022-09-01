<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoucherRequest;
use App\Http\Requests\UpdateVoucherRequest;
use App\Models\Voucher;

class VoucherController extends Controller
{
   
    public function index()
    {
        $vouchers = Voucher::all();
       // dd($users);

        return View('vouchers.index',compact('vouchers'));
    }

   
    public function create()
    {
        return view('vouchers.create');
    }

   
    public function store(StoreVoucherRequest $voucher)
    {
        Voucher::create([
            'nombre' => $voucher->nombre,
            'serie' =>  $voucher->serie,
            'Hora_llegada' =>  $voucher->Hora_llegada,
            'Hora_salida' => $voucher->Hora_salida,
            'fecha' => $voucher->fecha,
            'observaciones' => $voucher->observaciones,
            'branch_office_id' => $voucher->branch_office_id,
            'products_id' => $voucher->products_id
        ]);

        return redirect()->route('vouchers.index');
    }

   
    public function show(Voucher $voucher)
    {
        //
    }

   
    public function edit(Voucher $voucher)
    {
        return view('vouchers.edit',compact('voucher'));
    }

   
    public function update(UpdateVoucherRequest $request, Voucher $voucher)
    {
        $voucher->update([
            'nombre' => $request->nombre,
            'serie' =>  $request->serie,
            'Hora_llegada' =>  $request->Hora_llegada,
            'Hora_salida' => $request->Hora_salida,
            'fecha' => $request->fecha,
            'observaciones' => $request->observaciones,
            'branch_office_id' => $request->branch_office_id,
            'products_id' => $request->products_id
        ]);
        return redirect()->route('vouchers.index');
    }

    
    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return redirect()->route('vouchers.index');
    }
}
