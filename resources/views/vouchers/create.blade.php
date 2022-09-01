@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Voucher Nuevo</h2>
        <form action="{{ route('vouchers.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre voucher</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="serie">Serie del Voucher</label>
                        <input value="{{old('serie')}}" type="number" class="form-control" id="serie" name="serie" placeholder="Serie">
                        @error('serie')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="Hora_llegada">Hora llegada</label>
                        <input value="{{old('Hora_llegada')}}" type="time" class="form-control" id="Hora_llegada" name="Hora_llegada" placeholder="Hora de llegada">
                        @error('Hora_llegada')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="Hora_salida">Hora Salida</label>
                        <input value="{{old('Hora_salida')}}" type="time" class="form-control" id="Hora_salida" name="Hora_salida" placeholder="Hora de salida">
                        @error('Hora_salida')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="fecha">Fecha Emitida</label>
                        <input value="{{old('fecha')}}" type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                        @error('fecha')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="observaciones">Observaciones</label>
                        <input value="{{old('observaciones')}}" type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones">
                        @error('observaciones')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="branch_office_id">Sucursal</label>
                        <input value="{{old('branch_office_id')}}" type="number" class="form-control" id="branch_office_id" name="branch_office_id" placeholder="Sucursal">
                        @error('branch_office_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="products_id">Producto</label>
                            <input value="{{old('products_id')}}" type="number" class="form-control" id="products_id" name="products_id" placeholder="Producto">
                            @error('products_id')
                                <span> {{$message}} </span>
                            @enderror
                            </div>

                        
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Voucher Nuevo</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

