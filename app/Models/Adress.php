<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    //uno muchos de citie
    public function cities(){
        return $this->hasOne(City::class);
    }
     //uno muchos de stores
    public function stores(){
        return $this->hasMany(Store::class);
    }

     //uno muchos de bodegasucursales
    public function bodega_sucursal(){
        return $this->hasMany(BodegaSucursal::class);
    }

}
