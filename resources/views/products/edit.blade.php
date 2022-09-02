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
                        <input value="{{$product->nombre}}" type="text" class="form-control" id="nombre" name="nombre">
                        @error('nombre')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input value="{{$product->direccion}}" type="text" class="form-control" id="direccion" name="direccion">
                        @error('direccion')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                        

                        <div class="form-group col-md-6">
                        <label for="serie">Serie</label>
                        <input value="{{$product->serie}}" type="int" class="form-control" id="serie" name="serie">
                        @error('serie')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="iva">Iva</label>
                        <input value="{{$product->iva}}" type="number" class="form-control" id="iva" name="iva">
                        @error('iva')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="precio">Precio</label>
                        <input value="{{$product->precio}}" type="number" class="form-control" id="precio" name="precio">
                        @error('precio')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                    
                          <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar inventario al producto</label>
                               
                                     <select name="inventory_id" id="inventory_id" class="form-select">
                                       
                                        @foreach ($inventarios as $inventario)
                                            <option value="{{$inventario->id}}"> {{$inventario->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 

                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar Proovedor</label>
                               
                                     <select name="supplier_id" id="supplier_id" class="form-select">
                                       
                                        @foreach ($proovedores as $proovedor)
                                            <option value="{{$proovedor->id}}"> {{$proovedor->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 


                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar el tipo del producto</label>
                               
                                     <select name="kind_products_id" id="kind_products_id" class="form-select">
                                       
                                        @foreach ($tipos as $tipo)
                                            <option value="{{$tipo->id}}"> {{$tipo->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 

                        <div class="form-group col-md-6"> 
                            <label for="RoleAsigne">Asignar bodega principal</label>
                               
                                     <select name="store_id" id="store_id" class="form-select">
                                       
                                        @foreach ($bodegaPrinc as $bode)
                                            <option value="{{$bode->id}}"> {{$bode->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

