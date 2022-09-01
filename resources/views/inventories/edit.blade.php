@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Inventario</h2>
        <form action="{{ route('inventories.update' , $inventory) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre del Inventario</label>
                        <input value="{{$inventory->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripción del Inventario</label>
                        <input value="{{$inventory->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="mail">Email</label>
                        <input value="{{$inventory->mail}}" type="email" class="form-control" id="mail" name="mail">
                        @error('mail')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    
                     
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Inventario Nuevo</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   


   

   


   

