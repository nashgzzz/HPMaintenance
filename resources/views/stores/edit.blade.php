@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Local</h2>
        <form action="{{ route('stores.update' , $store) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Local</label>
                        <input value="{{$store->nombre}}"  type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar la direccion de la sucursal</label>
                               
                                     <select name="adress_id" id="adress_id" class="form-select">
                                       
                                        @foreach ($direcciones as $adress)
                                        <option value="{{$adress->id}}"> {{$adress->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Local</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

