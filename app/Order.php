<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

  protected $guarded = [];

  
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
