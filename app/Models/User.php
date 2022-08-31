<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    public function bodegas()
    {
        return $this->belongsToMany(Bodega::class, 'bodega_user','user_id', 'bodega_id');
    }

    protected $guarded = [ 'id' ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function bodega_usuarios(){
        return $this->hasMany(BodegaUsuario::class);
    }
    public function cars(){
        return $this->hasOne(Car::class);
    }
    public function clients(){
        return $this->hasMany(Client::class);
    }
    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function entryOrder(){
        return $this->hasOne(EntryOrder::class);
    }

    public function orden_entrega_bodegueros(){
        return $this->hasMany(ordenEntregaBodeguero::class);
    }


    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function branch_office_users(){
        return $this->hasMany(branchOfficeUser::class);
    }
    
    public function voucher_users(){
        return $this->hasMany(voucherUser::class);
    }

}
