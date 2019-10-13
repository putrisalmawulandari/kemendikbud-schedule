<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        return view('pages.employee.index',[
            'data'=>Employee::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('pages.employee.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'as'=>'required',
        ]);

        Employee::create($request->all());
        return back()->withMessage('Success');
    }

   
    public function show(Employee $employee)
    {
        //
    }

    
    public function edit(Employee$employee)
    {
        return view('pages.employee.edit',[
            'data'=>$employee,
        ]);
    }

    
    public function update(Request $request, Employee $employee)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'as'=>'required',
        ]);

       $employee->update($request->except('_token','_method'));
        return redirect()->route('employee.index')->withMessage('Updated');
    }

   
    public function destroy(Employee $employee)
    {
       $employee->delete();
        return back()->withMessage('Deleted');
    }
}
