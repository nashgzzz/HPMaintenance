@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Producto del cliente a {{$bodegaSucursal->nombre}}</h2>

        {!! Form::model($bodegaSucursal, ['route' => ['bodegaSucursals.asignar.producto', $bodegaSucursal->id], 'method' => 'PUT']) !!}
        @csrf
        <input type="hidden" name="bodega_sucursal_id" value={{$bodegaSucursal->id}}>

        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre Producto</label>
                    <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    @error('nombre')
                        <span> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="fecha_isntalacion">Fecha</label>
                    <input value="{{old('fecha_isntalacion')}}" type="date" class="form-control" id="fecha_isntalacion" name="fecha_isntalacion">
                    @error('fecha_isntalacion')
                        <span> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="descripcion">Descripción</label>
                    <input value="{{old('descripcion')}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                    @error('descripcion')
                        <span> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="obvervaciones">Observaciones</label>
                    <input value="{{old('obvervaciones')}}" type="text" class="form-control" id="obvervaciones" name="obvervaciones" placeholder="Obvervaciones">
                    @error('obvervaciones')
                        <span> {{$message}} </span>
                    @enderror
                </div>
            </div>
              
        {!! Form::submit('Asignar productos a Bodega Sucursal', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}


    
    </div>
</div>

@endsection

   

   


   

