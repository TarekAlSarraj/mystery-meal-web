<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\Employee;
use App\My_files;
use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;

class EmployeeFilesController extends Controller
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


    public function index_files(Employee $employee){
        
        // Shows a single resource 
            
            $files = $employee->My_files;
           
            return view('/admin/employees.index_files', ['files'=>$files , 'employee'=>$employee]);


    
    }


    public function download_files(Employee $employee , $id){

        // Shows a view to edit an existing resource
            
            $files=My_files::find($id);

            return Storage::download($files->filepath);         

    }


}
