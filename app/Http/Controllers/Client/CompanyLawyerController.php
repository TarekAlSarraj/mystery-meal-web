<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Client;

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
        if($company->client_id == Auth::user()->profile_id) {

            $lawyer=$company->company_lawyer;

            return view('/client/companies.show_lawyer', ['company' => $company , 'lawyer' => $lawyer]);

        }

        else
            return abort(403);
    }

    public function create(Company $company){

        // Shows a view to create a new resource

        if($company->client_id == Auth::user()->profile_id) 
             return view('/client/companies.create_lawyer' , compact('company'));
        
        else  return abort(403);


    }


    public function store(Company $company){


        Company_lawyer::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'lawyer_name'  => request('lawyer_name'),
                'lawyer_email' => request('lawyer_email'),
                'lawyer_phone' => request('lawyer_phone'),
                'lawyer_mobile' => request('lawyer_mobile'),
                'lawyer_fax' => request('lawyer_fax'),
                'lawyer_address' => request('lawyer_address'),
                'law_office_name' => request('law_office_name'),
                'lawyer_mof_number' => request('lawyer_mof_number')
              
            ]

        );

        

        return redirect('/client/companies/'.$company->id.'/files/upload');

    }


    public function edit(Company $company){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $lawyer=$company->company_lawyer;

            return view('/client/companies.edit_lawyer' , ['company' => $company , 'lawyer' => $lawyer ]);
        }
        else  return abort(403);
    }

    public function update(Company $company){

        // Persists the edited resource
        
        Company_lawyer::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'lawyer_name'  => request('lawyer_name'),
                'lawyer_email' => request('lawyer_email'),
                'lawyer_phone' => request('lawyer_phone'),
                'lawyer_mobile' => request('lawyer_mobile'),
                'lawyer_fax' => request('lawyer_fax'),
                'lawyer_address' => request('lawyer_address'),
                'law_office_name' => request('law_office_name'),
                'lawyer_mof_number' => request('lawyer_mof_number')
              
            ]

        );
       
        return redirect('/client/companies/' . $company->id . '/lawyer');



    }




}
