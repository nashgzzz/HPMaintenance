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
                        <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input value="{{old('direccion')}}" type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
                        @error('direccion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        

                        <div class="form-group col-md-6">
                        <label for="serie">Serie</label>
                        <input value="{{old('serie')}}" type="int" class="form-control" id="serie" name="serie" placeholder="serie">
                        @error('serie')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="iva">Iva</label>
                        <input value="{{old('serie')}}" type="int" class="form-control" id="iva" name="iva" placeholder="iva">
                        @error('iva')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="precio">Precio</label>
                        <input value="{{old('precio')}}" type="int" class="form-control" id="precio" name="precio" placeholder="precio">
                        @error('precio')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="inventory_id">Inventario</label>
                        <input value="{{old('inventory_id')}}" type="int" class="form-control" id="inventory_id" name="inventory_id" placeholder="inventory_id">
                        @error('inventory_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="supplier_id">Proovedor</label>
                        <input value="{{old('supplier_id')}}" type="int" class="form-control" id="supplier_id" name="supplier_id" placeholder="supplier_id">
                        @error('supplier_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="kind_products_id">Tipo de Producto</label>
                        <input value="{{old('kind_products_id')}}" type="int" class="form-control" id="kind_products_id" name="kind_products_id" placeholder="kind_products_id">
                        @error('kind_products_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="store_id">Local</label>
                        <input value="{{old('store_id')}}" type="int" class="form-control" id="store_id" name="store_id" placeholder="store_id">
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

   

   


   

