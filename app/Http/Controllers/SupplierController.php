<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        // dd($users);
 
         return View('suppliers.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $supplier)
    {
        $mensaje = Supplier::create([
            'nombre' => $supplier->nombre,
            'rut' => $supplier->rut,
            'dirección' => $supplier->dirección
        ]);

        if($mensaje)
        {
            toast('Proovedor agregado','success');
            
        }else{
            toast('Proovedor no agregado','warning');
        }

        return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $mensaje = $supplier->update([
            'nombre' => $request->nombre,
            'rut' => $request->rut,
            'dirección' => $request->dirección
        ]);
        if($mensaje)
        {
            toast('Proovedor actualizado','success');
            
        }else{
            toast('Proovedor no actualiado','warning');
        }

        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $mensaje = $supplier->delete();
        if($mensaje)
        {
            toast('Proovedor eliminado','success');
            
        }else{
            toast('Proovedor no eliminado','warning');
        }

        return redirect()->route('suppliers.index');
    }
}
