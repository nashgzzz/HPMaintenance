@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Agregar Voucher Usuario</h2>
        <form action="{{ route('voucherUsers.store') }}" method="POST">
        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="user_id">Usuario</label>
                        <input value="{{old('user_id')}}" type="number" class="form-control" id="user_id" name="user_id" placeholder="user_id">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="voucher_id">Voucher</label>
                        <input value="{{old('voucher_id')}}" type="number" class="form-control" id="voucher_id" name="voucher_id" placeholder="voucher_id">
                        @error('voucher_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Voucher Usuario</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

