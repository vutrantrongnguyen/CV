<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Information extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    protected $table = "informations";
}
