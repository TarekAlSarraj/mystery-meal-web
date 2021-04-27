<?php

namespace App\Http\Controllers\Client;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Company;

use App\Specialemp;

class CompaniesController extends Controller
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
    
    
    public function index(){
        
        // Renders a list of a resource
        $companies=Company::where('client_id','=',Auth::user()->profile_id)->get();
        
        return view('/client/companies.index', ['companies' => $companies]);
    }

    
    public function show_info(Company $company){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id){

            $specialemps = Specialemp::where('company_id',$company->id)->get();

            return view('/client/companies.show_info', ['company' => $company , 'specialemps' => $specialemps]);
        }

        else
            return abort(403);
    }


    public function create_info(){

        // Shows a view to create a new resource
        
        
        return view('/client/companies.create_info');

    }

    public function store_info(){

        // Persists the new resource


        $company=Company::create(request()->validate([
            
            'c_name' => ['required','unique:companies'],
            'c_email' => ['required', 'string', 'email','unique:companies'],
            'c_type' => 'nullable',
            'com_fame' => 'nullable',
            'f_number' => 'nullable',
            'mof_date' => 'nullable',
            'ssn_number' => 'nullable',
            'com_reg_place' => 'nullable',
            'com_reg_number' => 'nullable',
            'com_reg_date' => 'nullable',
            'mof_uname' => 'nullable',
            'mof_pass' => 'nullable'
        ]));
        
        $company->client_id=Auth::user()->profile_id;
        $company->save();

        $specialemp1= new Specialemp();
        
        $specialemp1->name = request('name1');
        $specialemp1->role = 'company_representative';
        $specialemp1->position = request('position1');
        $specialemp1->phone = request('phone1');
        $specialemp1->fax = request('fax1');
        $specialemp1->mof_number = request('mof_number1');
        $specialemp1->company_id = $company->id;
       
        $specialemp1->save();



        $specialemp2= new Specialemp();
        
        $specialemp2->name = request('name2');
        $specialemp2->role = 'mail_person';
        $specialemp2->position = request('position2');
        $specialemp2->phone = request('phone2');
        $specialemp2->fax = request('fax2');
        $specialemp2->mof_number = request('mof_number2');
        $specialemp2->company_id = $company->id;

        $specialemp2->save();



        $specialemp3= new Specialemp();
        
        $specialemp3->name = request('name3');
        $specialemp3->role = 'statement_person';
        $specialemp3->position = request('position3');
        $specialemp3->phone = request('phone3');
        $specialemp3->fax = request('fax3');
        $specialemp3->mof_number = request('mof_number3');
        $specialemp3->company_id = $company->id;

        $specialemp3->save();


        return redirect('/client/companies/'.$company->id.'/mof_ssn_address/create');

    }

    public function edit_info(Company $company){

        // Shows a view to edit an existing resource

        if($company->client_id == Auth::user()->profile_id){
            $specialemps=Specialemp::where('company_id',$company->id)->get();
            return view('/client/companies.edit_info' , ['company'=>$company, 'specialemps'=>$specialemps]);
        }
        else
            return abort(403);

    }

    public function update_info(Company $company){

        // Persists the edited resource
        
       $company->update(request()->validate([

        'c_name' => 'required',
        'c_email' => 'required',
        'c_type' => 'nullable',
        'com_fame' => 'nullable',
        'f_number' => 'nullable',
        'mof_date' => 'nullable',
        'ssn_number' => 'nullable',
        'com_reg_place' => 'nullable',
        'com_reg_number' => 'nullable',
        'com_reg_date' => 'nullable',
        'mof_uname' => 'nullable',
        'mof_pass' => 'nullable'

       ])); 

       $specialemp1=Specialemp::where(['company_id' => $company->id , 'role' => 'company_representative'])->first();
       $specialemp2=Specialemp::where(['company_id' => $company->id,  'role' => 'mail_person'])->first();
       $specialemp3=Specialemp::where(['company_id' => $company->id , 'role' => 'statement_person'])->first();
        
        $specialemp1->name = request('name1');
        $specialemp1->role = 'company_representative';
        $specialemp1->position = request('position1');
        $specialemp1->phone = request('phone1');
        $specialemp1->fax = request('fax1');
        $specialemp1->mof_number = request('mof_number1');
        $specialemp1->company_id = $company->id;
       
        $specialemp1->save();

        
        $specialemp2->name = request('name2');
        $specialemp2->role = 'mail_person';
        $specialemp2->position = request('position2');
        $specialemp2->phone = request('phone2');
        $specialemp2->fax = request('fax2');
        $specialemp2->mof_number = request('mof_number2');
        $specialemp2->company_id = $company->id;

        $specialemp2->save();


        $specialemp3->name = request('name3');
        $specialemp3->role = 'statement_person';
        $specialemp3->position = request('position3');
        $specialemp3->phone = request('phone3');
        $specialemp3->fax = request('fax3');
        $specialemp3->mof_number = request('mof_number3');
        $specialemp3->company_id = $company->id;

        $specialemp3->save();
        
        return redirect('/client/companies/' . $company->id);



    }

    public function destroy(){

        // Deletes the resource

    }


    // ==================================== mof_Address ================================








}
