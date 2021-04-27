<?php

namespace App\Http\Controllers\Client;

use ILluminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Client;
use App\User;
use App\Company;
use App\Employee;
use App\Notifications\UpdateIsMade;

class ClientController extends Controller
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
        $companies=Company::where('client_id',Auth::user()->profile_id)->get();

        if($companies!=null){
        $employees = collect(new Employee);
        
        foreach($companies as $company){
            $employees->push(Employee::where('company_id',$company->id)->get());
          }

          $employees = $employees->collapse();

          
          return view('/client/client_home' , ['companies'=> $companies , 'employees'=>$employees]);
        }
        else 
        return view('/client/client_home');

    
}

        public function show() {

   // Shows a single resource 
            $client = Auth::user();

            return view('/client/profile.show', ['client' => $client]);


        }

        public function edit() {

            $client = Auth::user();

            return view('/client/profile.edit', ['client' => $client]);

         
         
        }

        public function update() {

            
            $client = Client::where('id',Auth::user()->profile_id)->first();

            $original_arr = $client->user->getOriginal();
            
            $client->user->update([
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'username' => request('username'),
                'email' => request('email'),
           ]); 
           if($client->user->wasChanged()){
            // update performed an update

            $arr_of_changes = $client->user->getChanges();

            $admin=User::where('profile_type' , 'App\Admin')->first(); 
            $admin->notify(new UpdateIsMade($arr_of_changes,$original_arr));

            }
            
               return redirect('/client/profile/');


                
             }

}
