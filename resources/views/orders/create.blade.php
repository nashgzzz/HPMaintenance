@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Pedido Nuevo</h2>
    
        <form action="{{ route('orders.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre del Pedido</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>


                        <div class="form-group col-md-6">
                        <label for="cantidad">Cantidad</label>
                        <input value="{{old('cantidad')}}" type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
                        @error('cantidad')
                            <span> {{$message}} </span>
                        @enderror
                        </div>


                        <div class="form-group col-md-6">
                        <label for="valor">Valor</label>
                        <input value="{{old('valor')}}" type="number" class="form-control" id="valor" name="valor" placeholder="Valor">
                        @error('valor')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        
                        <div class="form-group col-md-6">
                        <label for="fecha_pedido">Fecha del pedido</label>
                        <input value="{{old('fecha_pedido')}}" type="date" class="form-control" id="fecha_pedido" name="fecha_pedido">
                        @error('fecha_pedido')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Pedido</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

