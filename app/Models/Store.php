<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];


     //uno a muchos relacion  (inverso)
     public function adress(){
        return $this->belongsTo(Adress::class);
    }


    public function products(){
        return $this->hasOne(Product::class);
    }
}
