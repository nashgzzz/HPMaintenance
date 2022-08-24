<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bodega;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class UserController extends Controller
{
    
    public function __construct(){
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.edit')->only('edit','update');
        $this->middleware('can:users.create')->only('create','store');
        $this->middleware('can:users.destroy')->only('destroy');
    }

    public function index()
    {
        
        $users = User::all();
        return View('users.index',compact('users'));
    }

    
    public function create(User $user)
    {
        $roles = Role::all();
        $user->roles()->sync($user->roles);
        return view('users.create',compact('user', 'roles'));
    }

    
    public function store(StoreUserRequest $user)
    {
 
       $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->password),
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'rut' => $user->rut,
            'fecha_nacimiento' => $user->fecha_nacimiento,
            'sexo' =>$user->sexo,
            'telefono' => $user->telefono,
   
        ]);

        $newUser->roles()->attach($user->roles);

        if($newUser)
        {
            toast('Usuario agregado','success');
            
        }else{
            toast('Usuario no agregado','warning');
        }

        return redirect()->route('users.index');
    }

  
    public function show(User $user)
    {
        //
    }

  
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit',compact('user', 'roles'));
    }

   

    public function update(UpdateUserRequest $request, User $user)
    {
       
        $user->update([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' =>  Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'rut' => $request->rut,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            
        ]);

        
        $roles = Role::all();
        $user->roles()->sync($request->roles);
        if($user)
        {
            toast('Usuario actualizado','success');
            
        }else{
            toast('Usuario no actualizado','warning');
        }
        return redirect()->route('users.index');

    }

  
    public function destroy(User $user)
    {
        //dd($user);
       $mensaje =  $user->delete();
       if($mensaje)
        {
            toast('Usuario eliminado','success');
            
        }else{
            toast('Usuario no eliminado','warning');
        }
        return redirect()->route('users.index');
    }

    public function asignar(User $user)
    {
        
        $bodegas = Bodega::all();

        return view('users.asignar',compact('user', 'bodegas'));
    }

    public function asignar_bodega(Request $request, User $user)
    {
        $newUser = User::find($user->id);
        $newUser->bodegas()->attach($request->bodegas);
        
        if($newUser)
        {
            toast('Bodega asignada','success');
            
        }else{
            toast('Bodega no asignada','warning');
        }
        
        return redirect()->route('users.index');

    }
    
}

