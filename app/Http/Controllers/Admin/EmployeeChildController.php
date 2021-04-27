<?php

namespace App\Http\Controllers\Admin;


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

    public function index_child(Employee $employee)
    {
          // Renders a list of a resource
            
        $children=$employee->child;
        return view('/admin/employees.index_child', ['employee'=>$employee , 'children' => $children]);

       
        
    }

    public function show_child(Employee $employee, Employee_child $child)
    {
         
        // Shows a single resource 

                return view('/admin/employees.show_child', [ 'employee'=>$employee  ,'child' => $child]);
     
        
    }


 





    
}
