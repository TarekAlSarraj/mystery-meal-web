<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Admin;
use App\Owner;

class AdminController extends Controller
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

 
    public function index(){
        
        // Renders a list of a resource

        $owners = Owner::all();
        return view('/admin/admin_home' , ['owners' => $owners] );

    
}



}
