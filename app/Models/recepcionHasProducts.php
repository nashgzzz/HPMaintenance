<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recepcionHasProducts extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function receptions(){
        return $this->belongsTo(Reception::class);
    }
}
