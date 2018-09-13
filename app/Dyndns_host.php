<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dyndns_host extends Model
{
    protected $fillable = [
        'client_id', 'host', 'date_initial', 'date_expire', 'active'
    ];

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
}
