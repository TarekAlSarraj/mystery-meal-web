<?php

namespace App\Http\Controllers\Client;


use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company;
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

    public function index_child(Company $company, Employee $employee)
    {
          // Renders a list of a resource
        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
        $children=$employee->child;
        return view('/client/employees.index_child', ['company' => $company , 'employee'=>$employee , 'children' => $children]);

        }
        else return abort(403);
        
    }

    public function show_child(Company $company, Employee $employee, Employee_child $child)
    {
         
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {

            if($employee->company_id == $company->id){
                return view('/client/employees.show_child', ['company' => $company , 'employee'=>$employee  ,'child' => $child]);
            }
            else return abort(404);
        }

        else
            return abort(403);
        
    }


    public function create_child(Company $company, Employee $employee)
    {

        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
            if($employee->company_id == $company->id) 
                 return view('/client/employees.create_child', ['company' => $company , 'employee' => $employee]);
            else 
                return abort(404);
            }
            else
                return abort(403);
        
    }


    public function store_child(Company $company,Employee $employee) {

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



        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/child');
    }




    public function edit_child(Company $company, Employee $employee, Employee_child $child)
    {

        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
            if($employee->company_id == $company->id) 
                 return view('/client/employees.edit_child', ['company' => $company , 'employee' => $employee , 'child' => $child]);
            else 
                return abort(404);
            }
            else
                return abort(403);
        
    }



    public function update_child(Company $company, Employee $employee, Employee_child $child)
    {

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

    



        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/child/' . $child->id);
    }

  





    
}
