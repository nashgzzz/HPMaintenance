<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;

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
        $direcciones = Adress::all();
        return View('suppliers.create',compact('direcciones'));
    }

   
    public function store(StoreSupplierRequest $supplier)
    {

        $adress = Adress::create([
            'nombre' => $supplier->adress
        ]);
        

        $mensaje = Supplier::create([
            'nombre' => $supplier->nombre,
            'rut' => $supplier->rut,
            'adress_id' => $adress->id
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
        $direcciones = Adress::all();
        return view('suppliers.edit',compact('supplier','direcciones'));
    }

  
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $mensaje = $supplier->update([
            'nombre' => $request->nombre,
            'rut' => $request->rut,
            'adress_id' => $request->adress_id
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
