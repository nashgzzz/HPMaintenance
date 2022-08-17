<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class roleController extends Controller
{
  
    public function index()
    {
        $roles = Role::all();
       

        return View('roles.index',compact('roles'));
    }

   
    public function create()
    {
        return View('roles.create');
    }


    public function store(StoreRoleRequest $role)
    {
        
        Role::create([
            'name' => $role->name,
            'guard_name' => $role->guard_name
        ]);

        return redirect()->route('roles.index');
    }


    public function show(Role $role)
    {
        
    }


    public function edit(Role $role)
    {
        return view('roles.edit',compact('role'));
    }


    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);
        return redirect()->route('roles.index');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
