@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Órden</h2>
        <form action="{{ route('entryOrders.update', $entryOrder) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de Órden</label>
                        <input value="{{$entryOrder->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="detalle">Detalle de órden</label>
                        <input value="{{$entryOrder->detalle}}" type="text" class="form-control" id="detalle" name="detalle">
                        @error('detalle')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                    
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Órden</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

