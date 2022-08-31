<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];


    public function bodega_sucursal(){
        return $this->belongsTo(BodegaSucursal::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function voucher_users(){
        return $this->hasMany(voucherUser::class);
    }
    public function productClientVouchers(){
        return $this->hasMany(productClientVouchers::class);
    }
}
