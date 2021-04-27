<?php

namespace App\Http\Controllers\Admin;


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

    public function index_oldwork(Employee $employee)
    {
       
        $oldworks=$employee->oldwork;
        return view('/admin/employees.index_oldwork', ['employee'=>$employee , 'oldworks' => $oldworks]);

       
        
    }

    public function show_oldwork( Employee $employee, Employee_oldwork $oldwork)
    {
         
        // Shows a single resource 

                return view('/admin/employees.show_oldwork', ['employee'=>$employee  ,'oldwork' => $oldwork]);
      
        
    }


  



}
