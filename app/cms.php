<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    protected $fillable = [
        'title',
        'description',
        'button',
    ];
}
