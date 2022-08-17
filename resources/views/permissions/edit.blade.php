@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Permiso</h2>
        <form action="{{ route('permissions.update', $permission) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="name">Nombre del Permiso</label>
                        <input value="{{$permission->name}}" type="text" class="form-control" id="name" name="name" placeholder="name">
                        @error('name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="guard_name">Guard name</label>
                        <input value="{{$permission->guard_name}}" type="text" class="form-control" id="v" name="guard_name" placeholder="guard_name">
                        @error('guard_name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
           
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Permiso</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

