<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productClientVoucher extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];

    public function products(){
        return $this->belongsTo(Products::class);
    }

    public function item_clients(){
        return $this->belongsTo(ItemClient::class);
    }

    public function vouchers(){
        return $this->belongsTo(Voucher::class);
    }
}
