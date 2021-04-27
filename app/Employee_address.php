<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_address extends Model
{
    
    protected $primaryKey = 'employee_id';
    public $incrementing = false;

    protected $guarded = [];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
