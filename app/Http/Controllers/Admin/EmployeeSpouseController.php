<?php

namespace App\Http\Controllers\Admin;


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

    public function index_spouse(Employee $employee)
    {
          // Renders a list of a resource
            
        $spouses=$employee->spouse;
        return view('/admin/employees.index_spouse', ['employee'=>$employee , 'spouses' => $spouses]);

        
    }

    public function show_spouse(Employee $employee, Employee_spouse $spouse)
    {
         
        // Shows a single resource 

                return view('/admin/employees.show_spouse', [ 'employee'=>$employee  ,'spouse' => $spouse]);

        
    }


   
  



}
