<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Store;
use App\Order;

class OrderController extends Controller
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
    $orders_arr=array();
    $stores=Store::where('owner_id','=',Auth::user()->profile_id)->get();
    foreach($stores as $store){
        $orders=Order::where('store_id','=',$store->id)->get();
        foreach($orders as $order){
          array_push($orders_arr, $order);
        }
    }
    return view('/owner/orders.index', ['orders' => $orders_arr]);
}


}
