<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fraction extends Model
{
    protected $fillable = [
        'fibra'
    ];

    public function buildings()
    {
        return $this->belongsTo('App\Building', 'building_id');
        //return $this->belongsToThrough(Country::class, User::class);
    }
    public function floors()
    {
        return $this->belongsTo('App\Floor', 'floor_id');
    }
    public function measurements()
    {
        return $this->hasmany('App\Measurement', 'fraction_id');
    }
}
