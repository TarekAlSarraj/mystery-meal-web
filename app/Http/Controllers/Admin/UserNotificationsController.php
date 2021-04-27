<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    //

    public function show() {
        

        return view('admin.notifications.show');
    }


}
