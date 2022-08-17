@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Tipo de Producto</h2>
        <form action="{{ route('kindProducts.update', $kindProduct) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre </label>
                        <input value="{{$kindProduct->nombre}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                 

                        <div class="form-group col-md-6">
                        <label for="fecha">Estado</label>
                        <input value="{{$kindProduct->status}}" type="int" class="form-control" id="status" name="status" placeholder="status">
                        @error('status')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Tipo de Producto</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

