<?php

namespace App\Http\Controllers\Client;


use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\User;
use App\Employee_oldwork;


class EmployeeOldworkController extends Controller
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

    public function index_oldwork(Company $company, Employee $employee)
    {
          // Renders a list of a resource
        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
        $oldworks=$employee->oldwork;
        return view('/client/employees.index_oldwork', ['company' => $company , 'employee'=>$employee , 'oldworks' => $oldworks]);

        }
        else return abort(403);
        
    }

    public function show_oldwork(Company $company, Employee $employee, Employee_oldwork $oldwork)
    {
         
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {

            if($employee->company_id == $company->id){
                return view('/client/employees.show_oldwork', ['company' => $company , 'employee'=>$employee  ,'oldwork' => $oldwork]);
            }
            else return abort(404);
        }

        else
            return abort(403);
        
    }


    public function create_oldwork(Company $company, Employee $employee)
    {

        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
            if($employee->company_id == $company->id) 
                 return view('/client/employees.create_oldwork', ['company' => $company , 'employee' => $employee]);
            else 
                return abort(404);
            }
            else
                return abort(403);
        
    }


    public function store_oldwork(Company $company,Employee $employee) {

        $oldwork = Employee_oldwork::create([
            'company_name' => request('company_name'),
            'company_owner' => request('company_owner'),
            'company_address' => request('company_address'),
            'ssn_number' => request('ssn_number'),
            'mof_number' => request('mof_number'),
            'last_salary' => request('last_salary'),
            'date_started' => request('date_started'),
            'date_left' => request('date_left'),
          
        ]); 

        $oldwork->employee_id = $employee->id;
        $oldwork->save();



        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/oldwork');
    }




    public function edit_oldwork(Company $company, Employee $employee, Employee_oldwork $oldwork)
    {

        if($company->client_id == Auth::user()->profile_id && $employee->company_id==$company->id) {
            
            if($employee->company_id == $company->id) 
                 return view('/client/employees.edit_oldwork', ['company' => $company , 'employee' => $employee , 'oldwork' => $oldwork]);
            else 
                return abort(404);
            }
            else
                return abort(403);
        
    }



    public function update_oldwork(Company $company, Employee $employee, Employee_oldwork $oldwork)
    {

        $oldwork->update([
            'company_name' => request('company_name'),
            'company_owner' => request('company_owner'),
            'company_address' => request('company_address'),
            'ssn_number' => request('ssn_number'),
            'mof_number' => request('mof_number'),
            'last_salary' => request('last_salary'),
            'date_started' => request('date_started'),
            'date_left' => request('date_left'),
          
        ]); 

    



        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/oldwork/' . $oldwork->id);
    }

  



}
