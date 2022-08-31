<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemClient extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function bodega_sucursal(){
        return $this->belongsTo(BodegaSucursal::class);
    }
    
    public function reception(){
        return $this->hasOne(Reception::class);
    }


    public function levantamiento_reqs(){
        return $this->hasOne(levantamientoReq::class);
    }


    public function productClientVouchers(){
        return $this->hasMany(productClientVouchers::Class);
    }
}
