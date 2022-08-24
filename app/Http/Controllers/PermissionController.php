<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;

class PermissionController extends Controller
{
    public function __construct(){
        $this->middleware('can:permissions.index')->only('index');
        $this->middleware('can:permissions.edit')->only('edit','update');
        $this->middleware('can:permissions.create')->only('create','store');
        $this->middleware('can:permissions.destroy')->only('destroy');
    }
    public function index()
    {
        $permissions = Permission::all();
        return View('permissions.index',compact('permissions'));
    }


    public function create()
    {
        return View('permissions.create');
    }

 
    public function store(StorePermissionRequest $permission)
    {
       $mensaje = Permission::create([
            'name' => $permission->name,
            'guard_name' => $permission->guard_name
        ]);

        if($mensaje)
        {
            toast('Permiso agregado','success');
            
        }else{
            toast('Permiso no agregado','warning');
        }
        return redirect()->route('permissions.index');
    }

  
    public function show($id)
    {
        
    }

  
    public function edit(Permission $permission)
    {
        return view('permissions.edit',compact('permission'));
    }

  
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $mensaje = $permission->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);
        if($mensaje)
        {
            toast('Permiso actualizado','success');
            
        }else{
            toast('Permiso no actualizado','warning');
        }
        return redirect()->route('permissions.index');
    }

  
    public function destroy(Permission $permission)
    {
        $mensaje = $permission->delete();
        if($mensaje)
        {
            toast('Permiso eliminado','success');
            
        }else{
            toast('Permiso no eliminado','warning');
        }
        return redirect()->route('permissions.index');
    }
}
