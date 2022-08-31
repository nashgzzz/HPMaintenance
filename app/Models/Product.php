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
        return $this->belongsTo(Store::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    
    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function kind_products(){
        return $this->belongsTo(KindProduct::class);
    }

    public function bodega(){
        return $this->belongsTo(Bodega::class);
    }




    //uno a muchos relacion
    public function booking(){
        return $this->hasMany(Booking::class);
    }

    public function category_products(){
        return $this->hasMany(CategoryProduct::class);
    }

    public function bodega_tecnico_products(){
        return $this->hasMany(bodegaTecnicoProduct::class);
    }

    public function orden_entrega_bodegueros(){
        return $this->hasMany(ordenEntregaBodeguero::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function recepcion_has_products(){
        return $this->hasMany(recepcionHasProducts::class);
    }

    public function productClientVouchers(){
        return $this->hasMany(productClientVouchers::class);
    }
    

    public function bodega_sucursals(){
        return $this->hasMany(BodegaSucursal::class);
    }



}
