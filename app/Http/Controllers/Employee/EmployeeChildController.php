<?php

namespace App\Http\Controllers\Employee;


use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\User;
use App\Employee_child;

use Illuminate\Support\Facades\Hash;

class EmployeeChildController extends Controller
{
    //
        
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_child()
    {
          // Renders a list of a resource
        $employee = Employee::find(Auth::user()->profile_id);
            
        $children=$employee->child;
        return view('/employee.index_child', ['employee'=>$employee , 'children' => $children]);

        
    }

    public function show_child( Employee_child $child)
    {
         
        // Shows a single resource 
        $employee = Employee::find(Auth::user()->profile_id);
        if($child->employee->id == $employee->id) {
                return view('/employee.show_child', ['employee'=>$employee  ,'child' => $child]);
            }
            else return abort(404);
        
    }


    public function create_child(Employee $employee)
    {

        $employee = Employee::find(Auth::user()->profile_id);
                 return view('/employee.create_child', [ 'employee' => $employee]);
           
        
    }


    public function store_child() {
        $employee = Employee::find(Auth::user()->profile_id);

        $child = Employee_child::create([
            'firstname' => request('firstname'),
            'father' => request('father'),
            'lastname' => request('lastname'),
            'mother' => request('mother'),
            'sex' => request('sex'),
            'birthdate' => request('birthdate'),
            'birthplace' => request('birthplace'),
            'deathdate' => request('deathdate'),
            'marital_status' => request('marital_status'),
            'disability' => request('disability'),
            'student' => request('student'),
            'edu_name' => request('edu_name'),
            'level' => request('level'),
            'benefit_start_date' => request('benefit_start_date'),
            'benefit_end_date' => request('benefit_end_date'),


        ]); 

        $child->employee_id = $employee->id;
        $child->save();



        return redirect('/employee/child');
    }




    public function edit_child( Employee_child $child)
    {
        $employee = Employee::find(Auth::user()->profile_id);

        if($child->employee->id == $employee->id) 
                 return view('employee.edit_child', ['employee' => $employee , 'child' => $child]);
            else 
                return abort(404);
         
        
    }



    public function update_child(Employee_child $child)
    {
        $employee = Employee::find(Auth::user()->profile_id);

        if($child->employee->id == $employee->id) {

            $child->update([
                'firstname' => request('firstname'),
                'father' => request('father'),
                'lastname' => request('lastname'),
                'mother' => request('mother'),
                'sex' => request('sex'),
                'birthdate' => request('birthdate'),
                'birthplace' => request('birthplace'),
                'deathdate' => request('deathdate'),
                'marital_status' => request('marital_status'),
                'disability' => request('disability'),
                'student' => request('student'),
                'edu_name' => request('edu_name'),
                'level' => request('level'),
                'benefit_start_date' => request('benefit_start_date'),
                'benefit_end_date' => request('benefit_end_date'),
        ]); 

    



        return redirect('/employee/child/' . $child->id);
    }
    }

  





    
}
