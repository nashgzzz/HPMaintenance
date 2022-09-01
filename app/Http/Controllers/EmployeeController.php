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
        $mensaje = Employee::create([ 
            'user_id' => $employee->user_id 
        ]);
        if($mensaje)
        {
            toast('Empleado agregado','success');
            
        }else{
            toast('Empleado no agregado','warning');
        }

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
        $mensaje = $employee->update([
            'user_id' => $request->user_id
        ]);
        if($mensaje)
        {
            toast('Empleado actualizado','success');
            
        }else{
            toast('Empleado no actualizado','warning');
        }

        return redirect()->route('employees.index');
    }

    
    public function destroy(Employee $employee)
    {
        //
        $mensaje = $employee->delete();
        if($mensaje)
        {
            toast('Empleado eliminado','success');
            
        }else{
            toast('Empleado no eliminado','warning');
        }
        return redirect()->route('employees.index');
    }
}
