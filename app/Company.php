<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function bilans()
    {
    	return $this->hasMany('App\Bilan');
    }
}
