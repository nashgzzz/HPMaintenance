<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodegaUsuario extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::Class);
    }

    public function bodegas(){
        return $this->belongsTo(Bodega::Class);
    }
}
