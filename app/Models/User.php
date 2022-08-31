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
        return $this->belongsToMany(Bodega::class, 'bodega_usuario','user_id', 'bodega_id');
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
        return $this->hasMany(BodegaUsuario::Class);
    }
    public function cars(){
        return $this->hasOne(Car::Class);
    }
    public function clients(){
        return $this->hasMany(Client::Class);
    }
    public function employees(){
        return $this->hasMany(Employee::Class);
    }
    public function entryOrder(){
        return $this->hasMany(EntryOrder::Class);
    }

    public function orden_entrega_bodegueros(){
        return $this->hasMany(ordenEntregaBodeguero::Class);
    }


    public function orders(){
        return $this->hasMany(Order::Class);
    }

    public function branch_office_users(){
        return $this->hasMany(branchOfficeUser::Class);
    }
    
    public function voucher_users(){
        return $this->hasMany(voucherUser::Class);
    }

}
