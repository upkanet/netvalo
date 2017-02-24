<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function type(){
    	return $this->belongsTo('App\RequestType','request_type_id');
    }

    public function level(){
    	return $this->belongsTo('App\RequestLevel','request_level_id');
    }

    public function valoDetails(){
    	$valo = $this->company->valo($this->valo_year);
    	return million($valo->fourchette()['low']) . ' M€ -> ' . million($valo->fourchette()['high']) . ' M€';
    }
}