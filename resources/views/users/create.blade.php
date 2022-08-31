
@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Usuario</h2>
    {!! Form::open(['route' => 'users.store']) !!}
        
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nameUser">Nombre Usuario</label>
                        <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="Usuario">
                        @error('name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Contraseña</label>
                        <input value="{{old('password')}}" type="password" class="form-control" id="password" name="password"  placeholder="Contraseña">
                        @error('password')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input value="{{old('email')}}" type="email" class="form-control" id="email" name="email" placeholder="Email">
                        @error('email')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="NombreUser">Nombre Completo</label>
                        <input value="{{old('first_name')}}" type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre Completo">
                        @error('first_name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="ApellidosUser">Apellidos</label>
                        <input value="{{old('last_name')}}" type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
                        @error('last_name')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="rutUser">Rut</label>
                        <input value="{{old('rut')}}" type="text" class="form-control" id="rut" name="rut" placeholder="Rut">
                        @error('rut')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="fechaNac">Fecha Nacimiento</label>
                        <input value="{{old('fecha_nacimiento')}}" type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"placeholder="Fecha Nacimiento">
                        @error('fecha_nacimiento')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="sexUser">Sexo</label>
                        <select value="{{old('sexo')}}" class="form-control form-control-sm" id="sexo" name="sexo" >
                            <option value=''>Seleccione</option>
                            <option value='male'>Hombre</option>
                            <option value='female'>Mujer</option>
                            <option value='other'>Otro</option>
                            </select>
                            @error('sexo')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="TelUser">Teléfono</label>
                        <input value="{{old('telefono')}}" type="int" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                        @error('telefono')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar Rol a usuario</label>
                                   @foreach ($roles as $role)
                                       <div>
                                           <label>
                                               {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                               {{$role->name}}
                                           </label>
                                       </div>
                                   @endforeach
                        </div>

                    </div>
                  
                    {!! Form::submit('Agregar Usuario', ['class' => 'btn btn-primary mt-2']) !!}
                    {!! Form::close() !!}
                 
        </form>


    
    </div>
</div>

@endsection

   

   


   

