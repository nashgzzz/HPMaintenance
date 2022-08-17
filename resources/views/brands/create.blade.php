@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Marca de Vehículo</h2>
        <form action="{{ route('brands.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Marca del Vehículo</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                    </div>
                    <button type="submit" class="btn btn-primary"> Agregar Marca de Vehículo</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

