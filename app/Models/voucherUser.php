<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucherUser extends Model
{
    use HasFactory;
    protected $guarded = [ 'id' ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function vouchers(){
        return $this->belongsTo(Voucher::class);
    }

}
