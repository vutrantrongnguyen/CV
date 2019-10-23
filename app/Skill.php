<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function information()
    {
        return $this->belongsTo(Information::class);
    }
}
