@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Producto</h2>
        <form action="{{ route('products.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Producto</label>
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input value="{{old('direccion')}}" type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                        @error('direccion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        

                        <div class="form-group col-md-6">
                        <label for="serie">Serie</label>
                        <input value="{{old('serie')}}" type="int" class="form-control" id="serie" name="serie" placeholder="Serie del producto">
                        @error('serie')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="iva">Iva</label>
                        <input value="{{old('serie')}}" type="number" class="form-control" id="iva" name="iva" placeholder="Iva">
                        @error('iva')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="precio">Precio</label>
                        <input value="{{old('precio')}}" type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
                        @error('precio')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar inventario al producto</label>
                               
                                     <select name="car_models_id" id="car_models_id" class="form-select">
                                       
                                        @foreach ($inventario as $model)
                                            <option value="{{$model->id}}"> {{$model->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 

                        <div class="form-group col-md-6">
                        <label for="inventory_id">Inventario</label>
                        <input value="{{old('inventory_id')}}" type="number" class="form-control" id="inventory_id" name="inventory_id" placeholder="Inventario">
                        @error('inventory_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="supplier_id">Proovedor</label>
                        <input value="{{old('supplier_id')}}" type="number" class="form-control" id="supplier_id" name="supplier_id" placeholder="Proovedor">
                        @error('supplier_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="kind_products_id">Tipo de Producto</label>
                        <input value="{{old('kind_products_id')}}" type="number" class="form-control" id="kind_products_id" name="kind_products_id" placeholder="Tipo de producto">
                        @error('kind_products_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="store_id">Local</label>
                        <input value="{{old('store_id')}}" type="number" class="form-control" id="store_id" name="store_id" placeholder="Local">
                        @error('store_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

