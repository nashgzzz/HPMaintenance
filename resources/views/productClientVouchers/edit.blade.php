@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar Voucher de Productos Clientes</h2>
        <form action="{{ route('productClientVouchers.update' , $productClientVoucher) }}" method="POST">
        @csrf
        @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="product_id">producto</label>
                        <input value="{{$productClientVoucher->product_id}}" type="number" class="form-control" id="product_id" name="product_id">
                        @error('product_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                     
                        <div class="form-group col-md-6">
                        <label for="item_clients_id">Productos Cliente</label>
                        <input value="{{$productClientVoucher->item_clients_id}}" type="number" class="form-control" id="item_clients_id" name="item_clients_id">
                        @error('item_clients_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Voucher de Productos Clientes</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   


   

   


   

