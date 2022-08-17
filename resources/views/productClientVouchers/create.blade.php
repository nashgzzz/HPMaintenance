@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Voucher de Productos Clientes</h2>
        <form action="{{ route('productClientVouchers.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="product_id">producto</label>
                        <input value="{{old('product_id')}}" type="text" class="form-control" id="product_id" name="product_id" placeholder="product_id">
                        @error('product_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="item_clients_id">Productos Cliente</label>
                        <input value="{{old('item_clients_id')}}" type="int" class="form-control" id="item_clients_id" name="item_clients_id" placeholder="item_clients_id">
                        @error('item_clients_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Voucher de Productos Clientes</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

