@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Modelo del Vehículo</h2>
    <form action="{{ route('carModels.update' , $carModel) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Modelo del Vehículo</label>
                        <input value="{{$carModel->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar Marca a Vehículo</label>
                               
                            <select name="brand_id" id="brand_id" class="form-select">
                                       
                                @foreach ($marcas as $brand)
                                
                                    <option value="{{$brand->id}}"> {{$brand->nombre}}</option>
                                  
                                @endforeach
                              </select>
                                  
                        </div> 

                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Modelo del Vehículo</button>
        </form>


    
    </div>
</div>

@endsection