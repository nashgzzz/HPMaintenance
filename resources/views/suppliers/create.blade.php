@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Proovedor</h2>
        <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Proovedor</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="rut">RUT del Proovedor</label>
                        <input value="{{old('rut')}}" type="text" class="form-control" id="rut" name="rut" placeholder="Rut del proovedor">
                        @error('rut')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                            <label for="adress">Dirección</label>
                            <input value="{{old('adress')}}" type="text" class="form-control" id="adress" name="adress" placeholder="Dirección del local">
                            @error('adress')
                                <span> {{$message}} </span>
                            @enderror
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Proovedor</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

