<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Store;
use App\Specialemp;


class StoresController extends Controller
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

        $stores = Store::latest()->get();

        return view('/admin/stores.index', ['stores' => $stores]);
    }

    
    public function show_info(Store $store){
        
        // Shows a single resource 

        return view('/admin/stores.show_info', ['store' => $store ]);


    }






}
