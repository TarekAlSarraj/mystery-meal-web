<?php

namespace App\Http\Controllers\Employee;


use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\User;
use App\Employee_spouse;
use Illuminate\Support\Facades\Hash;


class EmployeeSpouseController extends Controller
{
    
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_spouse()
    {
          // Renders a list of a resource

        $employee = Employee::find(Auth::user()->profile_id);
            
        $spouses=$employee->spouse;
        return view('/employee.index_spouse', ['employee'=>$employee , 'spouses' => $spouses]);
        
    }

    public function show_spouse(Employee_spouse $spouse)
    {
         
        // Shows a single resource 

        $employee = Employee::find(Auth::user()->profile_id);
        if($spouse->employee->id == $employee->id) {

            return view('/employee.show_spouse', ['employee'=>$employee  ,'spouse' => $spouse]);
        }
        else{
            return abort(403);
        }
       
        
    }


    public function create_spouse()
    {

        $employee = Employee::find(Auth::user()->profile_id);

                 return view('/employee.create_spouse', [ 'employee' => $employee]);
           
        
    }


    public function store_spouse() {
        $employee = Employee::find(Auth::user()->profile_id);
        $spouse = Employee_spouse::create([
            'firstname' => request('firstname'),
            'father' => request('father'),
            'lastname' => request('lastname'),
            'mother' => request('mother'),
            'nationality' => request('nationality'),
            'birthdate' => request('birthdate'),
            'birthplace' => request('birthplace'),
            'deathdate' => request('deathdate'),
            'record_number' => request('record_number'),
            'record_place' => request('record_place'),
            'mof_number' => request('mof_number'),
            'ssn_number' => request('ssn_number'),
            'isworking' => request('isworking'),
            'company_name' => request('company_name'),
            'company_mof_number' => request('company_mof_number'),
            'benefit_start_date' => request('benefit_start_date'),
            'benefit_end_date' => request('benefit_end_date'),
        ]); 

        $spouse->employee_id = $employee->id;
        $spouse->save();



        return redirect('/employee/spouse');
    }




    public function edit_spouse(Employee_spouse $spouse)
    {
        $employee = Employee::find(Auth::user()->profile_id);

        if($spouse->employee->id == $employee->id) 
            
                 return view('/employee.edit_spouse', ['employee' => $employee , 'spouse' => $spouse]);
            else 
                return abort(404);
            
        
    }



    public function update_spouse(Employee_spouse $spouse)
    {
        $employee = Employee::find(Auth::user()->profile_id);

        if($spouse->employee->id == $employee->id) {

            $spouse->update([
            'firstname' => request('firstname'),
            'father' => request('father'),
            'lastname' => request('lastname'),
            'mother' => request('mother'),
            'nationality' => request('nationality'),
            'birthdate' => request('birthdate'),
            'birthplace' => request('birthplace'),
            'deathdate' => request('deathdate'),
            'record_number' => request('record_number'),
            'record_place' => request('record_place'),
            'mof_number' => request('mof_number'),
            'ssn_number' => request('ssn_number'),
            'isworking' => request('isworking'),
            'company_name' => request('company_name'),
            'company_mof_number' => request('company_mof_number'),
            'benefit_start_date' => request('benefit_start_date'),
            'benefit_end_date' => request('benefit_end_date'),
        ]); 

        return redirect('/employee/spouse/' . $spouse->id);

            }



        
    }

  



}
