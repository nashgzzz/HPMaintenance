<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    //uno a muchos relacion  (inverso)
    public function states(){
        return $this->belongsTo(State::Class);
    }
    //uno a muchos relacion  (inverso)
    public function adresses(){
        return $this->belongsTo(Adress::Class);
    }

}
