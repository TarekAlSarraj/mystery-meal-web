<?php

namespace App\Http\Controllers\Employee;


use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
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

    public function index_oldwork( )
    {
          // Renders a list of a resource
          $employee = Employee::find(Auth::user()->profile_id);
            
        $oldworks=$employee->oldwork;
        return view('/employee.index_oldwork', ['employee'=>$employee , 'oldworks' => $oldworks]);


        
    }

    public function show_oldwork( Employee_oldwork $oldwork)
    {
         
        // Shows a single resource 
        $employee = Employee::find(Auth::user()->profile_id);

        if($oldwork->employee->id == $employee->id) {
                return view('/employee.show_oldwork', ['employee'=>$employee  ,'oldwork' => $oldwork]);
            }
            else return abort(404);
       
        
    }


    public function create_oldwork( Employee $employee)
    {

       
        $employee = Employee::find(Auth::user()->profile_id);
                 return view('/employee.create_oldwork', [ 'employee' => $employee]);
   
        
    }


    public function store_oldwork() {
        $employee = Employee::find(Auth::user()->profile_id);
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



        return redirect('/employee/oldwork');
    }




    public function edit_oldwork(Employee_oldwork $oldwork)
    {

        $employee = Employee::find(Auth::user()->profile_id);

        if($oldwork->employee->id == $employee->id) 
                 return view('/employee.edit_oldwork', ['employee' => $employee , 'oldwork' => $oldwork]);
            else 
                return abort(404);
          
        
    }



    public function update_oldwork(Employee_oldwork $oldwork)
    {
        $employee = Employee::find(Auth::user()->profile_id);
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

    



        return redirect('/employee/oldwork/' . $oldwork->id);
    }

  



}
