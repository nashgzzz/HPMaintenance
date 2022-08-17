<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBranchOfficeRequest;
use App\Http\Requests\UpdateBranchOfficeRequest;
use App\Models\BranchOffice;

class BranchOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchOffices = BranchOffice::all();
       
 
         return View('branchOffices.index',compact('branchOffices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branchOffices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBranchOfficeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchOfficeRequest $branchOffice)
    {
        BranchOffice::create([
            'nombre' => $branchOffice->nombre,
            'adress_id' => $branchOffice->adress_id
        ]);

        return redirect()->route('branchOffices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BranchOffice  $branchOffice
     * @return \Illuminate\Http\Response
     */
    public function show(BranchOffice $branchOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BranchOffice  $branchOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchOffice $branchOffice)
    {
        return view('branchOffices.edit',compact('branchOffice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchOfficeRequest  $request
     * @param  \App\Models\BranchOffice  $branchOffice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchOfficeRequest $request, BranchOffice $branchOffice)
    {
        $branchOffice->update([
            'nombre' => $request->nombre,
            'adress_id' => $request->adress_id
        ]);
        return redirect()->route('branchOffices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BranchOffice  $branchOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(BranchOffice $branchOffice)
    {
        $branchOffice->delete();
        return redirect()->route('branchOffices.index');
    }
}
