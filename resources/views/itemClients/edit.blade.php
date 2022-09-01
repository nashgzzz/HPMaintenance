@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Producto Cliente</h2>
        <form action="{{ route('itemClients.update', $itemClient) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Producto</label>
                        <input value="{{$itemClient->nombre}}"  type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="fecha_isntalacion">Fecha Instalación</label>
                        <input  value="{{\Carbon\Carbon::parse($itemClient->fecha_isntalacion)->format('Y-m-d')}}"  type="date" class="form-control" id="fecha_isntalacion" name="fecha_isntalacion">
                        @error('fecha_isntalacion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="descripcion">Descripción</label>
                        <input value="{{$itemClient->descripcion}}" type="text" class="form-control" id="descripcion" name="descripcion" >
                        @error('descripcion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="obvervaciones">Observaciones</label>
                        <input value="{{$itemClient->obvervaciones}}" type="text" class="form-control" id="obvervaciones" name="obvervaciones">
                        @error('obvervaciones')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                        <div class="form-group col-md-6"> 
                            
                            <label for="RoleAsigne">Asignar sucursal del cliente</label>
                               
                            <select  name="bodega_sucursal_id" id="bodega_sucursal_id" class="form-select"> 
                                       
                                        @foreach ($bodegaSucursales as $sucursal)
                                            <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 
   

                       
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Producto de Cliente</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

