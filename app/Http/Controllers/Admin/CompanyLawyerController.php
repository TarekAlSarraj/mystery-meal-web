<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\Company_lawyer;



class CompanyLawyerController extends Controller
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


    

    public function show(Company $company){
        
        // Shows a single resource 

            $lawyer=$company->company_lawyer;

            return view('/admin/companies.show_lawyer', ['company' => $company , 'lawyer' => $lawyer]);


  
    }

  



}
