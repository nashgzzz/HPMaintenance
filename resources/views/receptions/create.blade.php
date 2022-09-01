@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Recepción</h2>
        <form action="{{ route('receptions.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de la recepción</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripción</label>
                        <input value="{{old('descripcion')}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="fecha">Fecha</label>
                        <input value="{{old('fecha')}}" type="date" class="form-control" id="fecha" name="fecha">
                        @error('fecha')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        

                        <div class="form-group col-md-6">
                        <label for="user_id">Usuario</label>
                        <input value="{{old('user_id')}}" type="number" class="form-control" id="user_id" name="user_id" placeholder="Usuario">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Recepción</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

