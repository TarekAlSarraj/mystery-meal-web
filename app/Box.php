<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

      protected $guarded = [];

      protected $casts = [
      'category' => 'array',
      ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }



}
