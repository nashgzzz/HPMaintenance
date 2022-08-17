<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoucherRequest;
use App\Http\Requests\UpdateVoucherRequest;
use App\Models\Voucher;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::all();
       // dd($users);

        return View('vouchers.index',compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
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
            'product_client_vouchers' => $voucher->product_client_vouchers
        ]);

        return redirect()->route('vouchers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        return view('vouchers.edit',compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVoucherRequest  $request
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
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
            'product_client_vouchers' => $request->product_client_vouchers
        ]);
        return redirect()->route('vouchers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return redirect()->route('vouchers.index');
    }
}
