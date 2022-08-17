@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Producto</h2>
        <form action="{{ route('products.update' , $product) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nombre">Nombre Producto</label>
                        <input value="{{$product->nombre}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input value="{{$product->direccion}}" type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
                        @error('direccion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        

                        <div class="form-group col-md-6">
                        <label for="serie">Serie</label>
                        <input value="{{$product->serie}}" type="int" class="form-control" id="serie" name="serie" placeholder="serie">
                        @error('serie')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="iva">Iva</label>
                        <input value="{{$product->iva}}" type="int" class="form-control" id="iva" name="iva" placeholder="iva">
                        @error('iva')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="precio">Precio</label>
                        <input value="{{$product->precio}}" type="int" class="form-control" id="precio" name="precio" placeholder="precio">
                        @error('precio')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="inventory_id">Inventario</label>
                        <input value="{{$product->inventory_id}}" type="int" class="form-control" id="inventory_id" name="inventory_id" placeholder="inventory_id">
                        @error('inventory_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="supplier_id">Proovedor</label>
                        <input value="{{$product->supplier_id}}" type="int" class="form-control" id="supplier_id" name="supplier_id" placeholder="supplier_id">
                        @error('supplier_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="kind_products_id">Tipo de Producto</label>
                        <input value="{{$product->kind_products_id}}" type="int" class="form-control" id="kind_products_id" name="kind_products_id" placeholder="kind_products_id">
                        @error('kind_products_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="store_id">Local</label>
                        <input value="{{$product->store_id}}" type="int" class="form-control" id="store_id" name="store_id" placeholder="store_id">
                        @error('store_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

