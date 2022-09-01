@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Inventario</h2>
        <form action="{{ route('inventories.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre del Inventario</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripción del Inventario</label>
                        <input value="{{old('descripcion')}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="mail">Email</label>
                        <input value="{{old('mail')}}" type="email" class="form-control" id="mail" name="mail" placeholder="E-mail">
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

   

   


   

