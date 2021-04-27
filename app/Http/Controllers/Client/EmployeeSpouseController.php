<?php

namespace App\Http\Controllers\Client;


use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company;
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

    public function index_spouse(Company $company, Employee $employee)
    {
          // Renders a list of a resource
        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
        $spouses=$employee->spouse;
        return view('/client/employees.index_spouse', ['company' => $company , 'employee'=>$employee , 'spouses' => $spouses]);

        }
        else return abort(403);
        
    }

    public function show_spouse(Company $company, Employee $employee, Employee_spouse $spouse)
    {
         
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {

            if($employee->company_id == $company->id){
                return view('/client/employees.show_spouse', ['company' => $company , 'employee'=>$employee  ,'spouse' => $spouse]);
            }
            else return abort(404);
        }

        else
            return abort(403);
        
    }


    public function create_spouse(Company $company, Employee $employee)
    {

        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
            if($employee->company_id == $company->id) 
                 return view('/client/employees.create_spouse', ['company' => $company , 'employee' => $employee]);
            else 
                return abort(404);
            }
            else
                return abort(403);
        
    }


    public function store_spouse(Company $company,Employee $employee) {

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



        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/spouse');
    }




    public function edit_spouse(Company $company, Employee $employee, Employee_spouse $spouse)
    {

        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
            if($employee->company_id == $company->id) 
                 return view('/client/employees.edit_spouse', ['company' => $company , 'employee' => $employee , 'spouse' => $spouse]);
            else 
                return abort(404);
            }
            else
                return abort(403);
        
    }



    public function update_spouse(Company $company, Employee $employee, Employee_spouse $spouse)
    {

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

    



        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/spouse/' . $spouse->id);
    }

  



}
