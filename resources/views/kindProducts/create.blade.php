@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Tipo de Producto</h2>
        <form action="{{ route('kindProducts.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre </label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                 

                        <div class="form-group col-md-6">
                        <label for="fecha">Estado</label>
                        <input value="{{old('status')}}" type="number" class="form-control" id="status" name="status" placeholder="Estado (1 o 0)">
                        @error('status')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Tipo de Producto</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

