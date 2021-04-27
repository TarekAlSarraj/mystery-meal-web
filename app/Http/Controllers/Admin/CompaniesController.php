<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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

        $companies = Company::latest()->get();

        return view('/admin/companies.index', ['companies' => $companies]);
    }

    
    public function show_info(Company $company){
        
        // Shows a single resource 


        $specialemps = Specialemp::where('company_id',$company->id)->get();

        return view('/admin/companies.show_info', ['company' => $company ,  'specialemps' => $specialemps]);


    }






}
