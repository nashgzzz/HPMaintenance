<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevoucherUserRequest;
use App\Http\Requests\UpdatevoucherUserRequest;
use App\Models\voucherUser;

class VoucherUserController extends Controller
{
    
    public function index()
    {
        $voucherUsers = voucherUser::all();

        return View('voucherUsers.index' , compact('voucherUsers'));
    
    }

    
    public function create()
    {
        return view('voucherUsers.create');
    }

   
    public function store(StorevoucherUserRequest $voucherUser)
    {
       $mensaje = $voucherUser = voucherUser::create([
            'user_id' => $voucherUser->user_id,
            'voucher_id' => $voucherUser->voucher_id
        ]);
        if($mensaje)
        {
            toast('Voucher de usuario agregado','success');
            
        }else{
            toast('Voucher de usuariro no agregado','warning');
        }

        return redirect()->route('voucherUsers.index');
    }

    
    public function show(voucherUser $voucherUser)
    {
        //
    }

    
    public function edit(voucherUser $voucherUser)
    {
        return View('voucherUsers.edit' , compact('voucherUser'));
    }

    
    public function update(UpdatevoucherUserRequest $request, voucherUser $voucherUser)
    {
        $mensaje = $voucherUser->update([
            'user_id' => $request->user_id,
            'voucher_id' => $request->voucher_id
            ]
        );
        if($mensaje)
        {
            toast('Voucher de usuario actualizado','success');
            
        }else{
            toast('Voucher de usuariro no actualizado','warning');
        }
        return redirect()->route('voucherUsers.index');
    }

    
    public function destroy(voucherUser $voucherUser)
    {
        $mensaje = $voucherUser->delete();
        if($mensaje)
        {
            toast('Voucher de usuario eliminado','success');
            
        }else{
            toast('Voucher de usuariro no eliminado','warning');
        }
        return redirect()->route('voucherUsers.index');
    }
}
