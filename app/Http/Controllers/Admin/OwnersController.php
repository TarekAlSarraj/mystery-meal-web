<?php


namespace App\Http\Controllers\Admin;

// DON'T FORGET TO ADD THESE TWO!
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller as Controller;
use App\Owner;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\WelcomeToMysteryMeal;
use App\User;


class OwnersController extends Controller
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

        $owners = Owner::latest()->get();

        return view('/admin/owners.index', ['owners' => $owners]);
    }

    // public function show (Owner $Owner){

    //     // Renders a list of a resource

    //     return view('/admin/Owners.show' , ['Owner' => $Owner]);
    // }

    public function create (){

        // Renders a list of a resource

        return view('/admin/owners.create');
    }


    protected function store()
    {

         $user = User::create(request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]));


        $original_arr=array();
        $arr_of_changes=array($user->firstname,$user->lastname,$user->username,$user->email,$user->password);

        $user->password = Hash::make($user->password );
        $user->save();

        $profile = \App\Owner::create();
        $profile->user()->save(User::find($user->id));

        // update performed an update


        $user->notify(new WelcomeToMysteryMeal($arr_of_changes,$original_arr));


        return redirect('/admin/owners');
    }


    protected function show_profile(Owner $owner) {
        $user = User::where('profile_type','App\Owner')->where('profile_id',$owner->id)->first();
        return view('/admin/owners.profile' , ['user' => $user]);
    }

    protected function deactivate_Owner(Owner $owner) {
        $user = User::where('profile_type','App\Owner')->where('profile_id',$owner->id)->first();

        $user->is_deactivated = 1;
        $user->save();

        return view('/admin/owners.profile' , ['user' => $user]);
    }






}
