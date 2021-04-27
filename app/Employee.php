<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $guarded = [];

    public function user() 
  { 
    return $this->morphOne('App\User', 'profile');
  }

  public function company()
  {
      return $this->belongsTo(Company::class);
  }

  public function address()
  {
      return $this->hasOne(Employee_address::class);
  }

  public function spouse()
  {
      return $this->hasMany(Employee_spouse::class);
  }

  public function child()
  {
      return $this->hasMany(Employee_child::class);
  }

  public function my_files()
  {
      return $this->hasMany(My_files::class);
  }

  public function oldwork()
  {
      return $this->hasMany(Employee_oldwork::class);
  }
  
}
