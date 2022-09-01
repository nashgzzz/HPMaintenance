@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Categoria del Producto</h2>
        <form action="{{ route('categoryProducts.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="product_id">Nombre del producto</label>
                        <input value="{{old('product_id')}}" type="number" class="form-control" id="product_id" name="product_id" placeholder="product_id">
                        @error('product_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="category_id">Nombre de la Categoria</label>
                        <input value="{{old('category_id')}}" type="number" class="form-control" id="category_id" name="category_id" placeholder="category_id">
                        @error('category_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Categoria del Producto</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

