<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevoucherUserRequest;
use App\Http\Requests\UpdatevoucherUserRequest;
use App\Models\voucherUser;

class VoucherUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voucherUsers = voucherUser::all();

        return View('voucherUsers.index' , compact('voucherUsers'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voucherUsers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevoucherUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevoucherUserRequest $voucherUser)
    {
        $voucherUser = voucherUser::create([
            'user_id' => $voucherUser->user_id,
            'voucher_id' => $voucherUser->voucher_id
        ]);

        return redirect()->route('voucherUsers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\voucherUser  $voucherUser
     * @return \Illuminate\Http\Response
     */
    public function show(voucherUser $voucherUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\voucherUser  $voucherUser
     * @return \Illuminate\Http\Response
     */
    public function edit(voucherUser $voucherUser)
    {
        return View('voucherUsers.edit' , compact('voucherUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevoucherUserRequest  $request
     * @param  \App\Models\voucherUser  $voucherUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevoucherUserRequest $request, voucherUser $voucherUser)
    {
        $voucherUser->update([
            'user_id' => $request->user_id,
            'voucher_id' => $request->voucher_id
            ]
        );
        return redirect()->route('voucherUsers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\voucherUser  $voucherUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(voucherUser $voucherUser)
    {
        $voucherUser->delete();
        return redirect()->route('voucherUsers.index');
    }
}
