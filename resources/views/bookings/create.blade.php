@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Reserva</h2>
        <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de Reserva</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripción de la Reserva</label>
                        <input value="{{old('descripcion')}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="product_id">producto</label>
                        <input value="{{old('product_id')}}" type="int" class="form-control" id="product_id" name="product_id" placeholder="product_id">
                        @error('product_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                     


                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Reserva</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

