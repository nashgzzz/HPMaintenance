@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Producto Cliente</h2>
        <form action="{{ route('itemClients.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Producto</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="fecha_isntalacion">Fecha Instalación</label>
                        <input value="{{old('fecha_isntalacion')}}" type="date" class="form-control" id="fecha_isntalacion" name="fecha_isntalacion" placeholder="fecha_isntalacion">
                        @error('fecha_isntalacion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripción</label>
                        <input value="{{old('descripcion')}}" type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion">
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="obvervaciones">Observaciones</label>
                        <input value="{{old('obvervaciones')}}" type="text" class="form-control" id="obvervaciones" name="obvervaciones" placeholder="obvervaciones">
                        @error('obvervaciones')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                       
                        <div class="form-group col-md-6">
                        <label for="branch_office_id">Sucursal</label>
                        <input value="{{old('branch_office_id')}}" type="text" class="form-control" id="branch_office_id" name="branch_office_id" placeholder="branch_office_id">
                        @error('branch_office_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                       
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Producto de Cliente</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

