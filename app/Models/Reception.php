<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];

    public function recepcion_has_products(){
        return $this->hasMany(recepcionHasProducts::class);
    }


    public function bodega_sucursal(){
        return $this->belongsTo(BodegaSucursal::class);
    }

    public function item_clients(){
        return $this->belongsTo(ItemClient::class);
    }
   



}
