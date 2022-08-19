@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Rol</h2>

        {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'PUT'] ) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="name">Nombre Role</label>
                    <input  value="{{$role->name}}" type="text" class="form-control" id="name" name="name" placeholder="name">
                    @error('name')
                        <span> {{$message}} </span>
                    @enderror
                    </div>

                    <div class="form-group col-md-6">
                    <label for="guard_name">Guard Name</label>
                    <input value="{{$role->guard_name}}" type="text" class="form-control" id="guard_name" name="guard_name" placeholder="guard_name">
                    @error('guard_name')
                        <span> {{$message}} </span>
                    @enderror
                    </div> 

                    
                    <div class="form-group col-md-6">
                        <label for="guard_name">Asignar Permisos</label>
                        @foreach ($permissions as $permission)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{$permission->name}}
                                </label>
                            </div>
                        @endforeach
                    </div> 

                    

                </div>
            {!! Form::submit('Actualilizar Rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection

   

   


   

