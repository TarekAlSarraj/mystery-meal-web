<?php

namespace App\Http\Controllers\Owner;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Store;

use App\Items;

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
        $stores=Store::where('owner_id','=',Auth::user()->profile_id)->get();
        
        return view('/owner/stores.index', ['stores' => $stores]);
    }

    
    public function show_info(Store $store){
        
        // Shows a single resource 
        if($store->owner_id == Auth::user()->profile_id){

            $items = Items::where('store_id','=',$store->id)->get();
            return view('/owner/stores.show_info', ['store' => $store , 'items' => $items]);
        }

        else
            return abort(403);
    }


    public function create_info(){

        // Shows a view to create a new resource
        
        
        return view('/owner/stores.create_info');

    }

    public function store_info(){

        // Persists the new resource


        $store=Store::create(request()->validate([
            
            's_name' => ['required','unique:stores'],
            's_category' => 'nullable',
            's_address' => 'nullable',
            's_phone' => 'nullable',
            's_close_time' => 'nullable',
        ]));
        
        $store->owner_id=Auth::user()->profile_id;
        $store->save();


        return redirect('/owner/stores/'.$store->id);

    }

    public function edit_info(Store $store){

        // Shows a view to edit an existing resource

        if($store->owner_id == Auth::user()->profile_id){
            return view('/owner/stores.edit_info' , ['store'=>$store]);
        }
        else
            return abort(403);

    }

    public function update_info(Store $store){

        // Persists the edited resource
        
       $store->update(request()->validate([

        's_name' => 'required',
        's_category' => 'nullable',
        's_address' => 'nullable',
        's_phone' => 'nullable',
        's_close_time' => 'nullable',
      

       ])); 
        
        return redirect('/owner/stores/' . $store->id);



    }

    public function destroy(){

        // Deletes the resource

    }


    public function store_item(Store $store){

        // Persists the new resource


        $item=Items::create(request()->validate([
            
            'picture' => 'nullable',
            'title' => 'nullable',
            'category' => 'nullable',
            'price' => 'nullable',
        ]));
        
        $item->store_id=$store->id;
        $item->save();


        return redirect('/owner/stores/'.$store->id);

    }

    public function update_items(Store $store, Items $item){

        // Persists the edited resource
        
       $item->update([

        'picture' => request('picture'.$item->id),
        'title' => request('title'.$item->id),
        'category' => request('category'.$item->id),
        'price' => request('price'.$item->id),
       

       ]); 
        return redirect('/owner/stores/' . $store->id);



    }










}
