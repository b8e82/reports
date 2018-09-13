<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $fillable = [
        'name', 'address', 'postcode', 'locality', 'cc', 'nif', 'license'
    ];
}
