<?php

namespace App\Http\Controllers\Client;

use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\User;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
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


    public function create_employee(Company $company){

        // Shows a view to create a new resource
        
        if($company->client_id == Auth::user()->profile_id) 

           return view('/client/employees.create_employee' , compact('company'));

        else
            return abort(403);

    }


    public function store_employee(Company $company){
    
        
        
        $user = User::create(request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]));
        
        $user->password = Hash::make($user->password );
        $user->save();

        $profile = \App\Employee::create(['company_id'=>$company->id ]);
        $profile->user()->save(User::find($user->id));
        
        $employee_address= \App\Employee_address::create(['employee_id'=>$profile->id ]);
        $employee_address->save();

        
        return redirect('/client/companies/'.$company->id. '/employees');






    }


    public function index_all()
    {
          // Renders a list of a resource
          $companies=Company::where('client_id',Auth::user()->profile_id)->get();
          
          if($companies!=null){
          $employees = collect(new Employee);
          
          foreach($companies as $company){
              $employees->push(Employee::where('company_id',$company->id)->get());
            }

            $employees = $employees->collapse();

       
            return view('/client/employees.index_all', ['employees' => $employees]);
        }
        else 
            return view('/client/employees.index_all' );

        

        
    }

    public function index_single(Company $company)
    {
          // Renders a list of a resource
        if($company->client_id == Auth::user()->profile_id ) {

        $employees=Employee::where('company_id',$company->id)->get();

        return view('/client/employees.index_single', ['company' => $company , 'employees' => $employees]);

        }
        else return abort(403);
        
    }

    public function show_info(Company $company,Employee $employee){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id  && $employee->company_id==$company->id) {

            if($employee->company_id == $company->id)
                return view('/client/employees.show_info', ['company' => $company , 'employee' => $employee]);
            else return abort(404);
        }

        else
            return abort(403);
    }


 

    public function edit_info(Company $company,Employee $employee){

        // Shows a view to edit an existing resource

        if($company->client_id == Auth::user()->profile_id  && $employee->company_id==$company->id) {
            
        if($employee->company_id == $company->id) 
             return view('/client/employees.edit_info', ['company' => $company , 'employee' => $employee]);
        else 
            return abort(404);
        }
        else
            return abort(403);

    }

    public function update_info(Company $company,Employee $employee){

        // Persists the edited resource
        
       $employee->update([
            'e_father' => request('e_father'),
            'e_mother' => request('e_mother'),
            'e_sex' => request('e_sex'),
            'e_nationality' => request('e_nationality'),
            'e_religion' => request('e_religion'),
            'e_birthdate' => request('e_birthdate'),
            'e_birthplace' => request('e_birthplace'),
            'record_number' => request('record_number'),
            'record_place' => request('record_place'),
            'id_car_number' => request('id_car_number'),
            'e_id_governorate' => request('e_id_governorate'),
            'e_id_district' => request('e_id_district'),
            'e_id_rea' => request('e_id_rea'),
            'marital_status' => request('marital_status'),
            'job_desc' => request('job_desc'),
            'job_type' => request('job_type'),
            'work_time' => request('work_time'),
            'salary_type' => request('salary_type'),
            'start_working_date' => request('start_working_date'),
            'left_working_date' => request('left_working_date'),
            'back_working_date' => request('back_working_date'),
            'e_mof_number' => request('e_mof_number'),
            'e_mof_date' => request('e_mof_date'),
            'ssn_isregistered' => request('ssn_isregistered'),
            'e_ssn_number' => request('e_ssn_number'),
            'e_ssn_date' => request('e_ssn_date'),
            'spouse_works' => request('spouse_works'),
            'family_compensation' => request('family_compensation'),
            'children_compensation_count' => request('children_compensation_count'),
            'income_tax_concession' => request('income_tax_concession'),
            'itc_children_count' => request('itc_children_count'),
            'salary_basis' => request('salary_basis'),
            'daily_transportation' => request('daily_transportation'),
            'working_days' => request('working_days'),
            'representation_allowance' => request('representation_allowance'),
            'housing_allowance' => request('housing_allowance'),
            'food_voucher' => request('food_voucher'),
            'cash_food_allowance' => request('cash_food_allowance'),
            'other_benefits' => request('other_benefits'),
            'other_company' => request('other_company'),
            'other_company_name' => request('other_company_name'),
            'other_company_mofnumber' => request('other_company_mofnumber'),
            'other_company_ssnnumber' => request('other_company_ssnnumber')
            
       ]); 

        $employee->user->update([
            'firstname' => request('e_firstname'),
            'lastname' => request('e_lastname')
        ]);

        // if(request('marital_status')=='متزوّج'){
        //     // $employee->
        // }


        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id);



    }

    public function show_address(Company $company,Employee $employee){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id  && $employee->company_id==$company->id) {

            if($employee->company_id == $company->id){
            $employee_address = $employee->address;
                return view('/client/employees.show_address', ['company' => $company , 'employee' => $employee ,'employee_address' => $employee_address]);
            }
            else return abort(404);
        }

        else
            return abort(403);
    }


    public function edit_address(Company $company,Employee $employee){

        // Shows a view to edit an existing resource

        if($company->client_id == Auth::user()->profile_id  && $employee->company_id==$company->id) {
            
        if($employee->company_id == $company->id) {
            $employee_address = $employee->address;
             return view('/client/employees.edit_address', ['company' => $company , 'employee' => $employee ,'employee_address' => $employee_address]);
        }
        else 
            return abort(404);
        }
        else
            return abort(403);

    }

    public function update_address(Company $company,Employee $employee){

        // Persists the edited resource
        $employee_address = $employee->address;
       $employee_address->update([
            'e_governorate' => request('e_governorate'),
            'e_district' => request('e_district'),
            'e_rea' => request('e_rea'),
            'e_town' => request('e_town'),
            'e_street' => request('e_street'),
            'e_neighborhood' => request('e_neighborhood'),
            'e_building' => request('e_building'),
            'e_floor' => request('e_floor'),
            'e_rea_number' => request('e_rea_number'),
            'e_division_number' => request('e_division_number'),
            'e_phone' => request('e_phone'),
            'e_other_phone' => request('e_other_phone'),
            'e_fax' => request('e_fax'),
            'e_mailbox' => request('e_mailbox')
          
 
       ]); 

        $employee->user->update([
            'email' => request('e_email')
        ]);


        return redirect('/client/companies/' . $company->id . '/employees/' . $employee->id . '/address');



    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
