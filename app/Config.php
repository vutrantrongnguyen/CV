<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $casts = [
        'config' => 'array'
    ];
}
