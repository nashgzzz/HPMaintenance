@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Voucher </h2>
        <form action="{{ route('vouchers.update', $voucher) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre voucher</label>
                        <input value="{{$voucher->nombre}}"  type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="serie">Serie del Voucher</label>
                        <input value="{{$voucher->serie}}" type="int" class="form-control" id="serie" name="serie" placeholder="serie">
                        @error('serie')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="Hora_llegada">Hora llegada</label>
                        <input value="{{\Carbon\Carbon::parse($voucher->Hora_llegada)->format('H:i')}}" type="time" class="form-control" id="Hora_llegada" name="Hora_llegada" placeholder="Hora_llegada">
                        @error('Hora_llegada')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="Hora_salida">Hora Salida</label>
                        <input value="{{\Carbon\Carbon::parse($voucher->Hora_salida)->format('H:i')}}" type="time" class="form-control" id="Hora_salida" name="Hora_salida" placeholder="Hora_salida">
                        @error('Hora_salida')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="fecha">Fecha Emitida</label>
                        <input value="{{\Carbon\Carbon::parse($voucher->fecha)->format('Y-m-d')}}" type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
                        @error('fecha')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="observaciones">Observaciones</label>
                        <input value="{{$voucher->observaciones}}" type="text" class="form-control" id="observaciones" name="observaciones" placeholder="observaciones">
                        @error('observaciones')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="branch_office_id">Sucursal</label>
                        <input value="{{$voucher->branch_office_id}}" type="int" class="form-control" id="branch_office_id" name="branch_office_id" placeholder="branch_office_id">
                        @error('branch_office_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="product_client_vouchers">Voucher Producto Cliente</label>
                        <input value="{{$voucher->product_client_vouchers}}" type="int" class="form-control" id="product_client_vouchers" name="product_client_vouchers" placeholder="product_client_vouchers">
                        @error('product_client_vouchers')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Voucher </button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

