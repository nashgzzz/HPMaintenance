<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    //uno a muchos relacion entre state and country (inverso)
    public function country(){
        return $this->belongsTo(Country::Class);
    }


    // uno muchos a ciudad
    public function cities(){
        return $this->hasMany(City::Class);
    }
}
