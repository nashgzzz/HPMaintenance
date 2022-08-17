@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Empleado</h2>
        <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="user_id">ID de Usuario</label>
                        <input value="{{$employee->user_id}}" type="int" class="form-control" id="user_id" name="user_id" placeholder="user_id">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror  
                        </div>       
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
        </form>
    </div>
</div>
@endsection