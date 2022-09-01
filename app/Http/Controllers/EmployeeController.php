<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::all();
       // dd($users);

        return View('employees.index',compact('employees'));
    }

   
    public function create()
    {
        return view('employees.create');
    }

   
    public function store(StoreEmployeeRequest $employee)
    {
        Employee::create([ 
            'user_id' => $employee->user_id 
        ]);

        return redirect()->route('employees.index');
    
    }

    
    public function show(Employee $employee)
    {
        //
    }

    
    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

   
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update([
            'user_id' => $request->user_id
        ]);
        return redirect()->route('employees.index');
    }

    
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
