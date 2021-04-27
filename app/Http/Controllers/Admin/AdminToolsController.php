<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company_type;
class AdminToolsController extends Controller
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


    public function addCompanyType(){
        
        // Renders a list of a resource

        $types = Company_type::all();

        return view('/admin/tools.add_company_type' ,['types'=>$types]);

    
}

public function storeCompanyType(){
        

    Company_type::create([
        'type' => request('type'),
    ]);

    
    return redirect('/admin/tools/add_company_type');


}


public function deleteCompanyType($id){
        

    Company_type::destroy($id); 

    
    return redirect('/admin/tools/add_company_type');


}














}