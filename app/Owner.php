<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //

    protected $guarded = [] ;
    
    public function user() 
    { 
      return $this->morphOne('App\User', 'profile');
    }


    public function store()
    {
        return $this->hasMany(Store::class);
    }

   


}
