@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar</h2>

            {!! Form::model($user, ['route' => ['users.asignar.bodega', $user->id], 'method' => 'PUT']) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="name">Nombre</label>
                    <input  value="{{$user->name}}" readonly type="text" class="form-control" id="name" name="name">

                    @error('name')
                        <span> {{$message}} </span>
                    @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="guard_name">Asignamiento de Bodega</label>
                        @foreach ($bodegas as $bodega)
                            <div>
                                <label>
                                    {!! Form::checkbox('bodegas[]', $bodega->id, null, ['class' => 'mr-1']) !!}
                                    {{$bodega->nombre}}
                                </label>
                            </div>
                        @endforeach
                    </div> 

                    

                </div>
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection

