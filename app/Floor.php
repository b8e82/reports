<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function fractions()
    {
        return $this->hasMany('App\Fraction');
    }

    public function buildings()
    {
        return $this->belongsTo('App\Building', 'buildings_id');
    }
}
