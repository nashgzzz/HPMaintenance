@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Bodega</h2>
        <form action="{{ route('bodegas.update' , $bodega) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de Bodega</label>
                        <input value="{{$bodega->nombre}}"  type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Bodega</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

