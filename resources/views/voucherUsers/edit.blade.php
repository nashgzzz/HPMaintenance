@extends('layouts.app')

@section('content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h2>Actualizar  Voucher Usuario</h2>
        <form action="{{ route('voucherUsers.update', $voucherUser) }}" method="POST">
            @csrf
            @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="user_id">Usuario</label>
                        <input value="{{$voucherUser->user_id}}"  type="number" class="form-control" id="user_id" name="user_id">
                        @error('user_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>

                        <div class="form-group col-md-6">
                        <label for="voucher_id">Voucher</label>
                        <input value="{{$voucherUser->voucher_id}}"  type="number" class="form-control" id="voucher_id" name="voucher_id">
                        @error('voucher_id')
                            <span> {{$message}} </span>
                        @enderror
                        </div>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Voucher Usuario</button>
        </form>


    
    </div>
</div>

@endsection

   

   


   

