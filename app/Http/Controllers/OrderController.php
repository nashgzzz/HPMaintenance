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
        
        $order = Order::create([

            'nombre' => $order->nombre,
            'cantidad' => $order->cantidad,
            'valor' => $order->valor,
            'fecha_pedido' => $order->fecha_pedido,
            'user_id' => $order->user_id,
            'products_id' => $order->products_id
        ]);

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
        $order->update([
            'nombre' => $request->nombre,
            'cantidad' => $request->cantidad,
            'valor' => $request->valor,
            'fecha_pedido' => $request->fecha_pedido,
            'user_id' => $request->user_id,
            'products_id' => $request->products_id
            ]
        );
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
