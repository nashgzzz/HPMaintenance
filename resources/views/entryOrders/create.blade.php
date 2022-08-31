@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Órden</h2>
        <form action="{{ route('entryOrders.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre de Órden</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <label for="detalle">Detalle de órden</label>
                        <input value="{{old('detalle')}}" type="text" class="form-control" id="detalle" name="detalle" placeholder="detalle">
                        @error('detalle')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                       
                    
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Órden</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

