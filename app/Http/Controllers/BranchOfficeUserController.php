<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebranchOfficeUserRequest;
use App\Http\Requests\UpdatebranchOfficeUserRequest;
use App\Models\branchOfficeUser;

class BranchOfficeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchOfficeUsers = branchOfficeUser::all();
       
 
        return View('branchOfficeUsers.index',compact('branchOfficeUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branchOfficeUsers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebranchOfficeUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebranchOfficeUserRequest $branchOfficeUser)
    {
        branchOfficeUser::create([
            'user_id'=> $branchOfficeUser->user_id,
            'branch_office_id'=> $branchOfficeUser->branch_office_id
        ]);

        return redirect()->route('branchOfficeUsers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\branchOfficeUser  $branchOfficeUser
     * @return \Illuminate\Http\Response
     */
    public function show(branchOfficeUser $branchOfficeUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\branchOfficeUser  $branchOfficeUser
     * @return \Illuminate\Http\Response
     */
    public function edit(branchOfficeUser $branchOfficeUser)
    {
        return view('branchOfficeUsers.edit',compact('branchOfficeUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebranchOfficeUserRequest  $request
     * @param  \App\Models\branchOfficeUser  $branchOfficeUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebranchOfficeUserRequest $request, branchOfficeUser $branchOfficeUser)
    {
        $branchOfficeUser->update([
            'user_id'=> $request->user_id,
            'branch_office_id'=> $request->branch_office_id
        
        ]);
        return redirect()->route('branchOfficeUsers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\branchOfficeUser  $branchOfficeUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(branchOfficeUser $branchOfficeUser)
    {
        $branchOfficeUser->delete();
        return redirect()->route('branchOfficeUsers.index');
    }
}
