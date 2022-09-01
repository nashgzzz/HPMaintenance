<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebranchOfficeUserRequest;
use App\Http\Requests\UpdatebranchOfficeUserRequest;
use App\Models\branchOfficeUser;

class BranchOfficeUserController extends Controller
{
  
    public function index()
    {
        $branchOfficeUsers = branchOfficeUser::all();
        return View('branchOfficeUsers.index',compact('branchOfficeUsers'));
    }

  
    public function create()
    {
        return view('branchOfficeUsers.create');
    }

 
    public function store(StorebranchOfficeUserRequest $branchOfficeUser)
    {
        $mensaje = branchOfficeUser::create([
            'user_id'=> $branchOfficeUser->user_id,
            'bodega_sucursal_id'=> $branchOfficeUser->bodega_sucursal_id
        ]);
        
        if($mensaje)
        {
            toast('Bodega sucursal usuario agregada','success');
            
        }else{
            toast('Bodega sucursal usuario no agregada','warning');
        }


        return redirect()->route('branchOfficeUsers.index');
    }

    public function show(branchOfficeUser $branchOfficeUser)
    {
        //
    }

  
    public function edit(branchOfficeUser $branchOfficeUser)
    {
        return view('branchOfficeUsers.edit',compact('branchOfficeUser'));
    }

  
    public function update(UpdatebranchOfficeUserRequest $request, branchOfficeUser $branchOfficeUser)
    {
        $mensaje = $branchOfficeUser->update([
            'user_id'=> $request->user_id,
            'bodega_sucursal_id'=> $request->bodega_sucursal_id
        
        ]);
        if($mensaje)
        {
            toast('Bodega sucursal usuario actualizada','success');
            
        }else{
            toast('Bodega sucursal usuario no actualizada','warning');
        }

        return redirect()->route('branchOfficeUsers.index');
    }

 
    public function destroy(branchOfficeUser $branchOfficeUser)
    {
        $mensaje = $branchOfficeUser->delete();
        if($mensaje)
        {
            toast('Bodega sucursal usuario eliminada','success');
            
        }else{
            toast('Bodega sucursal usuario no eliminada','warning');
        }
        return redirect()->route('branchOfficeUsers.index');
    }
}
