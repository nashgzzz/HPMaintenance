@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Rol</h2>
        <form action="{{ route('roles.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="name">Nombre Role</label>
                        <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="name">
                        @error('name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="guard_name">Guard Name</label>
                        <input value="{{old('guard_name')}}" type="text" class="form-control" id="guard_name" name="guard_name" placeholder="guard_name">
                        @error('guard_name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
           
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Role</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

