<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    

    public function index()
    {
        $users = User::all();
       // dd($users);

        return View('users.index',compact('users'));
    }

    
    public function create()
    {
        return view('users.create');
    }

    
    public function store(StoreUserRequest $user)
    {
 
        User::create([
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
        return redirect()->route('users.index');

    }

  
    public function destroy(User $user)
    {
        //dd($user);
        $user->delete();
        return redirect()->route('users.index');
    }
}

