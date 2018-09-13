<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'address', 'responsible', 'phone', 'mobile', 'email_contact'
    ];

    public function devices()
    {
        return $this->hasMany('App\Device');
    }
}
