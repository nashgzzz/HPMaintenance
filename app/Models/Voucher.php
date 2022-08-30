<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];


    public function bodega_sucursals(){
        return $this->belongsTo(BodegaSucursal::Class);
    }

    public function products(){
        return $this->belongsTo(Product::Class);
    }

    public function voucher_users(){
        return $this->hasMany(voucherUser::Class);
    }
    public function productClientVouchers(){
        return $this->hasMany(productClientVouchers::Class);
    }
}
