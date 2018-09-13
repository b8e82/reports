<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'client_id', 'name', 'model', 'serial_number', 'ip', 'login_user', 'login_pass', 'notes'
    ];


    public function client()
    {
    	return $this->belongsTo('App\Client');
    }

}


