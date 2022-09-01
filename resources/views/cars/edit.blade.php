@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Vehículo</h2>
        <form action="{{ route('cars.update' , $car) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Vehículo</label>
                        <input value="{{$car->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="patente">Patente</label>
                        <input value="{{$car->patente}}" type="text" class="form-control" id="patente" name="patente">
                        @error('patente')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="color">Color</label>
                        <input value="{{$car->color}}" type="text" class="form-control" id="color" name="color">
                        @error('color')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripcion</label>
                        <input value="{{$car->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar Modelo a Vehículo</label>
                               
                                     <select name="car_models_id" id="car_models_id" class="form-select">
                                       
                                        @foreach ($modelo as $model)
                                            <option value="{{$model->id}}"> {{$model->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 

                        

                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Vehículo</button>
        </form>


    
    </div>
</div>

@endsection