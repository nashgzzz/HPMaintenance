@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Vehículo</h2>
        <form action="{{ route('cars.store') }}" method="POST">
        @csrf

        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Vehículo</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="patente">Patente</label>
                        <input value="{{old('patente')}}" type="text" class="form-control" id="patente" name="patente" placeholder="patente ">
                        @error('patente')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="color">Color</label>
                        <input value="{{old('color')}}" type="text" class="form-control" id="color" name="color" placeholder="color">
                        @error('color')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripcion</label>
                        <input value="{{old('descripcion')}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="car_models_id">Modelo</label>
                        <input value="{{old('car_models_id')}}" type="int" class="form-control" id="car_models_id" name="car_models_id" placeholder="car_models_id">
                        @error('car_models_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="user_id">Usuario</label>
                        <input value="{{old('user_id')}}" type="int" class="form-control" id="user_id" name="user_id" placeholder="user_id">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Vehículo</button>
        </form>


    
    </div>
</div>

@endsection