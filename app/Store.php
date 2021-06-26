<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //

    protected $guarded = [];



    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function item()
    {
        return $this->hasMany(Items::class);
    }

    public function box()
    {
        return $this->hasMany(Box::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }



}
