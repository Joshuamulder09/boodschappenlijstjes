<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = array();


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
