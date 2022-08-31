<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'bodega_user','user_id', 'bodega_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
    
    public function bodega_usuarios(){
        return $this->hasMany(BodegaUsuario::class);
    }

}
