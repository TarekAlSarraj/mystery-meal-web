<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminTasks extends Model
{

    protected $guarded = [] ;

    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function instance()
    {
        return $this->hasMany(adminTasks_instances::class);
    }
    
}
