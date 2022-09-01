<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
   
    public function index()
    {
        $orders = Order::all();

        return View('orders.index' , compact('orders'));
    }

   
    public function create()
    {
        return view('orders.create');
    }

  
    public function store(StoreOrderRequest $order)
    {
     
        
        $mensaje = $order = Order::create([

            'nombre' => $order->nombre,
            'cantidad' => $order->cantidad,
            'valor' => $order->valor,
            'fecha_pedido' => $order->fecha_pedido,
            'user_id' => auth()->user()->id
            
        ]);
        if($mensaje)
        {
            toast('Pedido agregado','success');
            
        }else{
            toast('Pedido no agregado','warning');
        }
       

        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        //
    }

  
    public function edit(Order $order)
    {
        return View('orders.edit' , compact('order'));
    }

    
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $mensaje = $order->update([
            'nombre' => $request->nombre,
            'cantidad' => $request->cantidad,
            'valor' => $request->valor,
            'fecha_pedido' => $request->fecha_pedido,
            'user_id' => auth()->user()->id
            ]
        );
        if($mensaje)
        {
            toast('Pedido actualizado','success');
            
        }else{
            toast('Pedido no actualizado','warning');
        }
       
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $mensaje = $order->delete();
        if($mensaje)
        {
            toast('Pedido eliminado','success');
            
        }else{
            toast('Pedido no eliminado','warning');
        }
       
        return redirect()->route('orders.index');
    }
}
