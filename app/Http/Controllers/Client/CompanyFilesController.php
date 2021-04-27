<?php


namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\My_files;
use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;

class CompanyFilesController extends Controller
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


    public function index_files(Company $company){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id) {
            
            $files = $company->My_files;

            return view('/client/companies.index_files', ['company' => $company , 'files'=>$files]);

        }

        else
            return abort(403);
    }


    public function download_files(Company $company, $id){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $files=My_files::find($id);

            return Storage::download($files->filepath);         

        }
    }

    public function delete_file(Company $company, $id){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $files=My_files::find($id);
            Storage::disk('public')->delete($files->filepath);   
            My_files::destroy($id);  
                
            return back();

        }
    }

    public function delete_all_files(Company $company){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $files=$company->My_files;
            foreach ($files as $file) {
                Storage::disk('public')->delete($file->filepath);   
                My_files::destroy($file->id);  
            }
                
            return back();

        }
    }
   

    public function before_upload_files(Company $company){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            

            return view('/client/companies.upload_files' , ['company' => $company ]);
        }
        else  return abort(403);
    }




    public function upload_files(Company $company){

        // Shows a view to edit an existing resource

        //the input name is equal to the file title.

        $filetit = request('filetit');
        $filecat = request('filecat');
        $fileprefix = request('fileprefix');

        
        $files = request($filetit);

     
        
        
        $count=0;
        if($files!=null){
            foreach ($files as $file) {
                if($file!=null){
                
                $extension = $file->getClientOriginalExtension();   
               $f= My_files::updateOrCreate(
                
                    ['company_id' => $company->id,
                     'filepath' => $file->storeAs("companyfiles/".$company->id."/".$filecat."/".$filetit , $fileprefix. uniqid().".".$extension),
                     'filetitle' => $filetit,
                     'category' => $filecat
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
             return response()->json(['msg'=>'لم يتم التّرفيع']);
    }  


}
