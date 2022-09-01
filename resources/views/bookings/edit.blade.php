@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Reserva</h2>
        <form action="{{ route('bookings.update' , $booking) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de Sucursal</label>
                        <input value="{{$booking->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="descripcion">Nombre de Sucursal</label>
                        <input value="{{$booking->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="product_id">Dirección</label>
                        <input value="{{$booking->product_id}}" type="number" class="form-control" id="product_id" name="product_id">
                        @error('product_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

