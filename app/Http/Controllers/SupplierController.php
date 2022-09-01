<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();
        // dd($users);
 
         return View('suppliers.index',compact('suppliers'));
    }

    
    public function create()
    {
        return View('suppliers.create');
    }

   
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

    
    public function show(Supplier $supplier)
    {
        //
    }

   
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit',compact('supplier'));
    }

  
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
