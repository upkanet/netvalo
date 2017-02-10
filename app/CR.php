<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CR extends Model
{
    protected $table = 'crs';

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
