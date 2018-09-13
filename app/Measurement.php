<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'fraction_id', 'fibra', 'atiate1310', 'atiate1550', 'ateati1310', 'ateati1550', 'atizap1310', 'atizap1550', 'zapati1310', 'zapati1550'
    ];

    public function fractions()
    {
        return $this->belongsTo('App\Fraction');
    }
}