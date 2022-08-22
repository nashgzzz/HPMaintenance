<?php

namespace App\Policies;

use App\Models\BodegaSucursal;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BodegaSucursalPolicy
{
    use HandlesAuthorization;

   
    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, BodegaSucursal $bodegaSucursal)
    {
        //
    }


    public function create(User $user)
    {
        //
    }

 
    public function update(User $user, BodegaSucursal $bodegaSucursal)
    {
        //
    }


    public function delete(User $user, BodegaSucursal $bodegaSucursal)
    {
        //
    }


    public function restore(User $user, BodegaSucursal $bodegaSucursal)
    {
        //
    }

    public function forceDelete(User $user, BodegaSucursal $bodegaSucursal)
    {
        //
    }
}
