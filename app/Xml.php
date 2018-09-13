<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xml extends Model
{
    protected $fillable = [
        'building_id', 'tomada', 'freq', 'pwr', 'mer', 'vber'
    ];
}
