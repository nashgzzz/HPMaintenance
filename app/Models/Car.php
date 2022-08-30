<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    public function car_models(){
        return $this->belongsTo(CarModel::Class);
    }
    public function users(){
        return $this->belongsTo(User::Class);
    }


}
