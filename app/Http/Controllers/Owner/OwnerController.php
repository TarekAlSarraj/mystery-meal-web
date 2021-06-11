<?php

namespace App\Http\Controllers\Owner;

use ILluminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Owner;
use App\User;
use App\Store;
use App\Notifications\UpdateIsMade;

class OwnerController extends Controller
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
        $stores=Store::where('owner_id',Auth::user()->profile_id)->get();

        return view('/owner/owner_home' , ['stores' => $stores]);

}

        public function show() {

   // Shows a single resource 
            $Owner = Auth::user();

            return view('/owner/profile.show', ['owner' => $owner]);


        }

        public function edit() {

            $Owner = Auth::user();

            return view('/owner/profile.edit', ['owner' => $owner]);

         
         
        }

        public function update() {

            
            $owner = Owner::where('id',Auth::user()->profile_id)->first();

            $original_arr = $owner->user->getOriginal();
            
            $owner->user->update([
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'username' => request('username'),
                'email' => request('email'),
           ]); 
           if($Owner->user->wasChanged()){
            // update performed an update

            $arr_of_changes = $owner->user->getChanges();

            $admin=User::where('profile_type' , 'App\Admin')->first(); 
            $admin->notify(new UpdateIsMade($arr_of_changes,$original_arr));

            }
            
               return redirect('/owner/profile/');


                
             }

}
