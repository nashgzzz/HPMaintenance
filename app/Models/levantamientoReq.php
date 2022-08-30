<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levantamientoReq extends Model
{
    use HasFactory;

    public function item_clients(){
        return $this->belongsTo(ItemClient::class);
    }
}
