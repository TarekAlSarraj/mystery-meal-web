<?php

namespace App\Http\Controllers\Employee;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Employee;


class EmployeeController extends Controller
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

    public function show_profile() {

        // Shows a single resource 
        $employee = Auth::user();
     
        return view('/employee/profile.show', ['employee' => $employee]);
     
     
    }
     
    public function edit_profile() {
     
        $employee = Auth::user();
     
        return view('/employee/profile.edit', ['employee' => $employee]);
     
              
              
        }
     
    public function update_profile() {
     
                 
        $employee = Employee::where('id',Auth::user()->profile_id)->first();
     
                 
        $employee->user->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'email' => request('email'),
        ]); 
     
        return redirect('/employee/profile/');
                     
        }


    public function show_info(){
        
        // Renders a list of a resource
        $employee = Employee::find(Auth::user()->profile_id);

        return view('/employee/show_info', ['employee' => $employee]);
    }

    public function edit_info(){

        // Shows a view to edit an existing resource

        $employee = Employee::find(Auth::user()->profile_id);

        return view('/employee.edit_info', ['employee' => $employee]);

    }

    public function update_info(){

        // Persists the edited resource
    $employee = Employee::find(Auth::user()->profile_id);

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


        return redirect('/employee');



    }

    public function show_address(){
        
        // Shows a single resource 
        $employee = Employee::find(Auth::user()->profile_id);

            $employee_address = $employee->address;
                return view('/employee.show_address', ['employee' => $employee ,'employee_address' => $employee_address]);

    }


    public function edit_address() {

        // Shows a view to edit an existing resource

        $employee = Employee::find(Auth::user()->profile_id);

            $employee_address = $employee->address;
             return view('/employee.edit_address', ['employee' => $employee ,'employee_address' => $employee_address]);
     

    }

    public function update_address(){

        // Persists the edited resource
        $employee = Employee::find(Auth::user()->profile_id);
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


        return redirect('/employee/address');



    }







    
}
