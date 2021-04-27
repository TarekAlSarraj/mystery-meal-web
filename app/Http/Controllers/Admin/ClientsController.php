<?php


namespace App\Http\Controllers\Admin;

// DON'T FORGET TO ADD THESE TWO!
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller as Controller;
use App\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;


class ClientsController extends Controller
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

        $clients = Client::latest()->get();

        return view('/admin/clients.index', ['clients' => $clients]);
    }

    // public function show (Client $client){
        
    //     // Renders a list of a resource

    //     return view('/admin/clients.show' , ['client' => $client]);
    // }

    public function create (){
        
        // Renders a list of a resource

        return view('/admin/clients.create');
    }


    protected function store()
    {

         $user = User::create(request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]));
        
        
        $user->password = Hash::make($user->password );
        $user->save();

        $profile = \App\Client::create();
        $profile->user()->save(User::find($user->id));

        return redirect('/admin/clients');
    }


    protected function show_profile(Client $client) {
        $user = User::where('profile_type','App\Client')->where('profile_id',$client->id)->first();
        return view('/admin/clients.profile' , ['user' => $user]);
    }

    protected function deactivate_client(Client $client) {
        $user = User::where('profile_type','App\Client')->where('profile_id',$client->id)->first();
        
        $user->is_deactivated = 1;
        $user->save();

        return view('/admin/clients.profile' , ['user' => $user]);
    }


  



}



    

  
    



