<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=['id'];


    //uno a muchos relacion  (inverso)
    public function store(){
        return $this->belongsTo(Store::Class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::Class);
    }
    
    public function inventory(){
        return $this->belongsTo(Inventory::Class);
    }

    public function kind_products(){
        return $this->belongsTo(KindProduct::Class);
    }

    public function bodega(){
        return $this->belongsTo(Bodega::Class);
    }




    //uno a muchos relacion
    public function booking(){
        return $this->hasMany(Booking::Class);
    }

    public function category_products(){
        return $this->hasMany(CategoryProduct::Class);
    }

    public function bodega_tecnico_products(){
        return $this->hasMany(bodegaTecnicoProduct::Class);
    }

    public function orden_entrega_bodegueros(){
        return $this->hasMany(ordenEntregaBodeguero::Class);
    }

    public function orders(){
        return $this->hasMany(Order::Class);
    }

    public function recepcion_has_products(){
        return $this->hasMany(recepcionHasProducts::Class);
    }

    public function productClientVouchers(){
        return $this->hasMany(productClientVouchers::Class);
    }
    

    public function bodega_sucursals(){
        return $this->hasMany(BodegaSucursal::Class);
    }



}
