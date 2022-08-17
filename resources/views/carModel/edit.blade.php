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
                        <input value="{{$carModel->nombre}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        

                        <div class="form-group col-md-6">
                        <label for="brand_id">Marca del Vehículo</label>
                        <input value="{{$carModel->brand_id}}" type="int" class="form-control" id="brand_id" name="brand_id" placeholder="brand_id">
                        @error('brand_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Modelo del Vehículo</button>
        </form>


    
    </div>
</div>

@endsection