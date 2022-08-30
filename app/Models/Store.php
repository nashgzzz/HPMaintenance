<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];


     //uno a muchos relacion  (inverso)
     public function adresses(){
        return $this->belongsTo(Adress::Class);
    }


    public function products(){
        return $this->hasMany(Product::Class);
    }
}
