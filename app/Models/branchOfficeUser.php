<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branchOfficeUser extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function users(){
        return $this->belongsTo(User::class);
    }

   //uno muchos de bodegasucursales
   public function bodega_sucursals(){
    return $this->belongsTo(BodegaSucursal::class);

    }
}
