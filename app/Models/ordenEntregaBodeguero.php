<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordenEntregaBodeguero extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::Class);
    }
    public function products(){
        return $this->belongsTo(Product::Class);
    }


}
