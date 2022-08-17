@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Dirección</h2>
        <form action="{{ route('adress.store') }}" method="POST">
        @csrf
       
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Dirección</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>       
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Dirección</button>
        </form>
    </div>
</div>

@endsection