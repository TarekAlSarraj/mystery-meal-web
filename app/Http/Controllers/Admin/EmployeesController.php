<?php

namespace App\Http\Controllers\Admin;

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






    public function index_all()
    {
          // Renders a list of a resource
          $companies = Company::all();

          if($companies!=null){
          $employees = collect(new Employee);
          
          foreach($companies as $company){
              $employees->push(Employee::where('company_id',$company->id)->get());
            }

            $employees = $employees->collapse();

       
            return view('/admin/employees.index_all', ['employees' => $employees]);
        }
        else 
            return view('/admin/employees.index_all' );

        

        
    }

    public function index_single(Company $company)
    {
          // Renders a list of a resource
       

        $employees=Employee::where('company_id',$company->id)->get();

        return view('/admin/employees.index_single', ['company' => $company , 'employees' => $employees]);

     
        
    }

    public function show_info(Employee $employee){
        
        // Shows a single resource 

                return view('/admin/employees.show_info', [ 'employee' => $employee]);

    }


 

   

    public function show_address(Employee $employee){
        
        // Shows a single resource 

            $employee_address = $employee->address;
                return view('/admin/employees.show_address', ['employee' => $employee ,'employee_address' => $employee_address]);

    }


   
}
