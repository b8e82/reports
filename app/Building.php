<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public function fractions()
    {
        return $this->hasManyThrough('App\Fraction', 'App\Floor');
    }

    public function floors()
    {
        return $this->hasMany('App\Floor');
    }

}
