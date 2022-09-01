@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Sucursal</h2>
        <form action="{{ route('bodegaSucursals.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de Sucursal</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                       
                

                        <div class="form-group col-md-6">
                            <label for="adress">Dirección</label>
                            <input value="{{old('adress')}}" type="text" class="form-control" id="adress" name="adress" placeholder="Dirección de la sucursal">
                            @error('adress')
                                <span> {{$message}} </span>
                            @enderror
                            </div>

                      
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Sucursal</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

