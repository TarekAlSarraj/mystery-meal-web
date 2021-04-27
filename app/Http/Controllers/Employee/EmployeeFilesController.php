<?php


namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
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


    public function index_files(){
        
        // Shows a single resource 
        $employee = Employee::find(Auth::user()->profile_id);
            
            $files = $employee->My_files;
           
            return view('employee.index_files', [ 'files'=>$files , 'employee'=>$employee]);


    }


    public function download_files( $id){

        // Shows a view to edit an existing resource
        $employee = Employee::find(Auth::user()->profile_id);

        $files=My_files::find($id);

            if($employee->id==$files->employee_id) {

            return Storage::download($files->filepath);       
            }  

    }

    public function delete_file($id){

        // Shows a view to edit an existing resource
        $employee = Employee::find(Auth::user()->profile_id);

            $files=$employee->my_files->find($id);

            if($employee->id==$files->employee_id) {
            Storage::disk('public')->delete($files->filepath);   
            My_files::destroy($id);  
            return back();
            }
            else{
                return abort(403);
            }
            

    }

    public function delete_all_files(){

        // Shows a view to edit an existing resource
        $employee = Employee::find(Auth::user()->profile_id);

            $files=$employee->My_files;
       
            foreach ($files as $file) {
                if($employee->id==$file->employee_id) {
                Storage::disk('public')->delete($file->filepath);   
                My_files::destroy($file->id);  
                }
            }
                
            return back();

    }
   

    public function before_upload_files(){

        // Shows a view to edit an existing resource
        $employee = Employee::find(Auth::user()->profile_id);


            return view('/employee.upload_files' , [ 'employee' => $employee]);

    }




    public function upload_files(){

        // Shows a view to edit an existing resource

        //the input name is equal to the file title.

        $employee = Employee::find(Auth::user()->profile_id);


        $filetit = request('filetit');
        $fileprefix = request('fileprefix');

        
        $files = request($filetit);
     
        
        
        $count=0;
        if($files!=null){
            foreach ($files as $file) {
                if($file!=null){
                
                $extension = $file->getClientOriginalExtension();   
                $f= My_files::updateOrCreate(
                
                    ['employee_id' => $employee->id,
                     'filepath' => $file->storeAs("employeefiles/".$employee->id."/".$filetit , $fileprefix. uniqid().".".$extension),
                     'filetitle' => $filetit,
                    ]
                );

                if((!$f->wasRecentlyCreated && $f->wasChanged()) || $f->wasRecentlyCreated){
                    $count++;
                }
                
                if(!$f->wasRecentlyCreated && !$f->wasChanged()){
                    $count=0;
                    
                }
               

                }

              

            }
     
           
        }
        
        if($count>0)
            return response()->json(['msg'=>'تم التّرفيع بنجاح']);
        else
            return response()->json(['error'=>'لم يتم التّرفيع']);
    }  

}
