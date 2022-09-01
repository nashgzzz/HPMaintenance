@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Agregar Rol</h2>
            {!! Form::open(['route' => 'roles.store']) !!}
            
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="name">Nombre del Rol</label>
                            <input  type="text" class="form-control" id="name" name="name" placeholder="Nomber del rol">
                            @error('name')
                                <span> {{$message}} </span>
                            @enderror
                            </div>

                            <div class="form-group col-md-6">
                            <label for="guard_name">Guard Name</label>
                            <input type="text" class="form-control" id="guard_name" name="guard_name" placeholder="Guard_name">
                            @error('guard_name')
                                <span> {{$message}} </span>
                            @enderror
                            </div> 

                            
                            <div class="form-group col-md-6">
                                <label for="guard_name">Asignamiento de Permisos</label>
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
                        {!! Form::submit('Agregar Rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
    </div>
</div>

@endsection

   

   


   

