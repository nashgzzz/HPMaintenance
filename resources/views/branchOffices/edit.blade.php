@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Sucursal</h2>
        <form action="{{ route('branchOffices.update' , $branchOffice) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Sucursal</label>
                        <input value="{{$branchOffice->nombre}}"  type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="adress_id">Dirección</label>
                        <input value="{{$branchOffice->adress_id}}"  type="int" class="form-control" id="adress_id" name="adress_id" placeholder="adress_id">
                        @error('adress_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Sucursal</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

