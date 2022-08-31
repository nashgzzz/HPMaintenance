<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodegaSucursal extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function adress(){
        return $this->belongsTo(Adress::class);
    }

    public function branch_office_users(){
        return $this->hasMany(branchOfficeUser::class);
    }

    public function vouchers(){
        return $this->hasMany(Voucher::class);
    }

    public function receptions(){
        return $this->hasMany(Reception::class);
    }

    public function item_client(){
        return $this->hasOne(ItemClient::class);
    }
   
}
