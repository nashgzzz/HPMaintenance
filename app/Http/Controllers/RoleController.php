<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.edit')->only('edit','update');
        $this->middleware('can:roles.create')->only('create','store');
        $this->middleware('can:roles.destroy')->only('destroy');
    }

    public function index()
    {
        $roles = Role::all();
        return View('roles.index',compact('roles'));
    }

   
    public function create()
    {
        $permissions = Permission::all();
        return View('roles.create', compact('permissions'));
    }


    public function store(StoreRoleRequest $role)
    {
       
        $newRole = Role::create($role->all());
        
        
        
        $newRole->permissions()->attach($role->permissions);
    

        return redirect()->route('roles.index');
    }


    public function show(Role $role)
    {
        
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit',compact('role', 'permissions'));
    }


    public function update(UpdateRoleRequest $request, Role $role)
    {
        
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
