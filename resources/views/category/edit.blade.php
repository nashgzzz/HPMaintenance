@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Categoria</h2>
    <form action="{{ route('category.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de la Categoria</label>
                        <input value="{{$category->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Categoria</button>
        </form>


    
    </div>
</div>

@endsection