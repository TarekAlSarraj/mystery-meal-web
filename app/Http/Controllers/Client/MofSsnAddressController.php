<?php

namespace App\Http\Controllers\Client;

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
        if($company->client_id == Auth::user()->profile_id) {

            $mof_address=$company->mof_address;
            $ssn_address=$company->ssn_address;

            return view('/client/companies.show_mof_ssn_address', ['company' => $company , 'mof_address' => $mof_address , 'ssn_address' => $ssn_address]);

        }

        else
            return abort(403);
    }

    public function create_mof_ssn_address(Company $company){

        // Shows a view to create a new resource

        if($company->client_id == Auth::user()->profile_id) 
             return view('/client/companies.create_mof_ssn_address' , compact('company'));
        
        else  return abort(403);


    }

    public function store_mof_ssn_address(Company $company){


        Mof_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate1'),
                'district' => request('district1'),
                'street' => request('street1'),
                'neighborhood' => request('neighborhood1'),
                'real_estate_area' => request('real_estate_area1'),
                'real_estate_number' => request('real_estate_number1'),
                'division_number' => request('division_number1'),
                'building' => request('building1'),
                'floor' => request('floor1'),
                'phone' => request('phone1'),
                'fax' => request('fax1'),
                'mailbox' => request('mailbox1'),
                'region' => request('region1'),
                'changed_date' => request('changed_date1')
            ]

        );

        Ssn_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate2'),
                'district' => request('district2'),
                'street' => request('street2'),
                'neighborhood' => request('neighborhood2'),
                'real_estate_area' => request('real_estate_area2'),
                'real_estate_number' => request('real_estate_number2'),
                'division_number' => request('division_number2'),
                'building' => request('building2'),
                'floor' => request('floor2'),
                'phone' => request('phone2'),
                'fax' => request('fax2'),
                'mailbox' => request('mailbox2'),
                'region' => request('region2'),
                'changed_date' => request('changed_date2')
            ]

        );
        

        return redirect('/client/companies/'.$company->id.'/lawyer/create');

    }

    public function edit_mof_ssn_address(Company $company){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $mof_address=$company->mof_address;
            $ssn_address=$company->ssn_address;

            return view('/client/companies.edit_mof_ssn_address' , ['company' => $company , 'mof_address' => $mof_address , 'ssn_address' => $ssn_address]);
        }
        else  return abort(403);
    }

    public function update_mof_ssn_address(Company $company){

        // Persists the edited resource
        
        Mof_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate1'),
                'district' => request('district1'),
                'street' => request('street1'),
                'neighborhood' => request('neighborhood1'),
                'real_estate_area' => request('real_estate_area1'),
                'real_estate_number' => request('real_estate_number1'),
                'division_number' => request('division_number1'),
                'building' => request('building1'),
                'floor' => request('floor1'),
                'phone' => request('phone1'),
                'fax' => request('fax1'),
                'mailbox' => request('mailbox1'),
                'region' => request('region1'),
                'changed_date' => request('changed_date1')
            ]

        );

        Ssn_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate2'),
                'district' => request('district2'),
                'street' => request('street2'),
                'neighborhood' => request('neighborhood2'),
                'real_estate_area' => request('real_estate_area2'),
                'real_estate_number' => request('real_estate_number2'),
                'division_number' => request('division_number2'),
                'building' => request('building2'),
                'floor' => request('floor2'),
                'phone' => request('phone2'),
                'fax' => request('fax2'),
                'mailbox' => request('mailbox2'),
                'region' => request('region2'),
                'changed_date' => request('changed_date2')
            ]

        );


        

            
        return redirect('/client/companies/' . $company->id . '/mof_ssn_address');



    }


}
