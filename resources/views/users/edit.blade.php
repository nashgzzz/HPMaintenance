@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Actualizar Usuario</h2>

        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}

                       <div class="form-row">
                           <div class="form-group col-md-6">
                           <label for="nameUser">Nombre Usuario</label>
                           <input value="{{$user->name}}" type="text" class="form-control" id="name" name="name">
                           @error('name')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="inputPassword4">Contraseña 
                            <small>
                                **Ingrese Contraseña Nueva**
                            </small>
                        </label>
                           <input  type="password" class="form-control" id="password" name="password"  placeholder="****">
                           @error('password')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="inputEmail4">Email</label>
                           <input value="{{$user->email}}" type="email" class="form-control" id="email" name="email">
                           @error('email')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           
                           <div class="form-group col-md-6">
                           <label for="NombreUser">Nombre Completo</label>
                           <input value="{{$user->first_name}}" type="text" class="form-control" id="first_name" name="first_name">
                           @error('first_name')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="ApellidosUser">Apellidos</label>
                           <input value="{{$user->last_name}}"  type="text" class="form-control" id="last_name" name="last_name">
                           @error('last_name')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="rutUser">Rut</label>
                           <input value="{{$user->rut}}" type="text" class="form-control" id="rut" name="rut">
                           @error('rut')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="fechaNac">Fecha Nacimiento</label>
                           <input value="{{\Carbon\Carbon::parse($user->fecha_nacimiento)->format('Y-m-d')}}" type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                           @error('fecha_nacimiento')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="sexUser">Sexo</label>
                           <select class="form-control form-control-sm" id="sexo" name="sexo">
                               <option value=''>Seleccione</option>
                               <option value='male' @if($user->sexo=='male') selected @endif >Hombre</option>
                               <option value='female' @if($user->sexo=='female') selected @endif >Mujer</option>
                               <option value='other'@if($user->sexo=='other') selected @endif >Otro</option>
                               </select>
                               @error('sexo')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
                           <div class="form-group col-md-6">
                           <label for="TelUser">Teléfono</label>
                           <input value="{{$user->telefono}}" type="int" class="form-control" id="telefono" name="telefono">
                           @error('telefono')
                               <span> {{$message}} </span>
                           @enderror
                           </div>
   
                           <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Editar Rol a usuario</label>
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
            {!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary mt-2']) !!}
                   
        {!! Form::close() !!}
    
    </div>
</div>

@endsection

   

   


   

