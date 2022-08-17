@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Pedido </h2>
        <form action="{{ route('orders.update' , $order) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre del Pedido</label>
                        <input value="{{$order->nombre}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>


                        <div class="form-group col-md-6">
                        <label for="cantidad">Cantidad</label>
                        <input value="{{$order->cantidad}}" type="int" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
                        @error('cantidad')
                            <span> {{$message}} </span>
                        @enderror
                        </div>


                        <div class="form-group col-md-6">
                        <label for="valor">Valor</label>
                        <input value="{{$order->valor}}" type="int" class="form-control" id="valor" name="valor" placeholder="valor">
                        @error('valor')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        
                        <div class="form-group col-md-6">
                        <label for="fecha_pedido">Fecha del pedido</label>
                        <input value="{{\Carbon\Carbon::parse($order->fecha_pedido)->format('Y-m-d')}}" type="date" class="form-control" id="fecha_pedido" name="fecha_pedido" placeholder="fecha_pedido">
                        @error('fecha_pedido')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="user_id">Usuario</label>
                        <input value="{{$order->user_id}}" type="int" class="form-control" id="user_id" name="user_id" placeholder="user_id">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="item_client_id">Producto del cliente</label>
                        <input value="{{$order->item_client_id}}" type="int" class="form-control" id="item_client_id" name="item_client_id" placeholder="item_client_id">
                        @error('item_client_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar el Pedido</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   



   

   


   

