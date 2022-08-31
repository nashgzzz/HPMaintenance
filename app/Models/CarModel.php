<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function brand(){
        return $this->belongsTo(Brand::Class);
    }

    public function cars(){
        return $this->hasOne(Car::Class);
    }


}
