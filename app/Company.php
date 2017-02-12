<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function bilans()
    {
    	return $this->hasMany('App\Bilan');
    }

    public function bilan($year){
        return $this->bilans()->where('year', $year)->first();
    }

    public function crs()
    {
    	return $this->hasMany('App\CR');
    }

    public function cr($year){
        return $this->crs()->where('year', $year)->first();
    }
}
