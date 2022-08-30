<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindProduct extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function kind_products(){
        return $this->hasMany(KindProduct::Class);
    }

    
}
