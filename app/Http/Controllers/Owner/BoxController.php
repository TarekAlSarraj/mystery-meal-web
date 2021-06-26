<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;

use App\Store;
use App\Box;
use App\Box_items;

class BoxController extends Controller
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
        $boxes_arr=array();
        $items_arr=array();
        $stores=Store::where('owner_id','=',Auth::user()->profile_id)->get();
        foreach($stores as $store){
            $boxes=Box::where('store_id','=',$store->id)->get();
            foreach($boxes as $box){
              array_push($boxes_arr, $box);
              $items = Box_items::where('box_id' ,'=', $box->id)->get();
              foreach ($items as $item) {
                array_push($items_arr, $item);
              }
            }
        }
        return view('/owner/boxes.index', ['boxes' => $boxes_arr , 'items'=>$items_arr ]);
    }


}
