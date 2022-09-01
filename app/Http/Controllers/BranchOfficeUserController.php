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
        branchOfficeUser::create([
            'user_id'=> $branchOfficeUser->user_id,
            'branch_office_id'=> $branchOfficeUser->branch_office_id
        ]);

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
        $branchOfficeUser->update([
            'user_id'=> $request->user_id,
            'branch_office_id'=> $request->branch_office_id
        
        ]);
        return redirect()->route('branchOfficeUsers.index');
    }

 
    public function destroy(branchOfficeUser $branchOfficeUser)
    {
        $branchOfficeUser->delete();
        return redirect()->route('branchOfficeUsers.index');
    }
}
