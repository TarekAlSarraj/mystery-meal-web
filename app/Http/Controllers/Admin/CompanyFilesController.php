<?php


namespace App\Http\Controllers\Admin;

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
        
            
            $files = $company->My_files;

            return view('/admin/companies.index_files', ['company' => $company , 'files'=>$files]);

   
    }


    public function download_files(Company $company, $id){

            
            $files=My_files::find($id);

            return Storage::download($files->filepath);         

    }







    

}
