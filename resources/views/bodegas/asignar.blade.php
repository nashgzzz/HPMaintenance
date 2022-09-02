@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Agregar Producto a {{$bodega->nombre}}</h2>
        {!! Form::model($bodega, ['route' => ['bodegas.asignar.producto', $bodega->id], 'method' => 'PUT']) !!}
        @csrf
        <input type="hidden" name="bodegas_id" value={{$bodega->id}}>

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
                            <label for="RoleAsigne">Asignar local </label>
                               
                                     <select name="store_id" id="store_id" class="form-select">
                                       
                                        @foreach ($locales as $local)
                                            <option value="{{$local->id}}"> {{$local->nombre}}</option>
                                        @endforeach
                                      </select>
                                  
                        </div> 
                    </div>
            {!! Form::submit('Asignar productos a Bodega Principal', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}


    
    </div>
</div>

@endsection

   

   


   

