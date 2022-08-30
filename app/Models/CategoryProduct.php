<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $guarded=['id'];

     //uno a muchos relacion  (inverso)
     public function categories(){
        return $this->belongsTo(Category::Class);
    }

    public function products(){
        return $this->belongsTo(Product::Class);
    }

}
