@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar un usuario de sucursal</h2>
        <form action="{{ route('branchOfficeUsers.update' , $branchOfficeUser) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="user_id">Usuario para Sucursal</label>
                        <input value="{{$branchOfficeUser->user_id}}"  type="number" class="form-control" id="user_id" name="user_id">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="bodega_sucursal_id">Sucursal</label>
                        <input value="{{$branchOfficeUser->bodega_sucursal_id}}"  type="number" class="form-control" id="bodega_sucursal_id" name="bodega_sucursal_id">
                        @error('bodega_sucursal_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar un usuario de sucursal</button>
        </form>


    
    </div>
</div>

@endsection