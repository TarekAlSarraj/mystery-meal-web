<?php

namespace App\Http\Controllers\Admin;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Mof_address;
use App\Ssn_address;
use App\Company;

class MofSsnAddressController extends Controller
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



    

    public function show_mof_ssn_address(Company $company){
        
        // Shows a single resource 
            
     
            $mof_address=$company->mof_address;
            $ssn_address=$company->ssn_address;

            return view('/admin/companies.show_mof_ssn_address', ['company' => $company , 'mof_address' => $mof_address , 'ssn_address' => $ssn_address]);


    }

}
