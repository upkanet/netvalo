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


    public function sig($field){
    	$cr_fields = config('balance_fields.cr_fields');
    	$ss_tots = config('balance_fields.cr_ss_tot');

    	if(isset($cr_fields[$field])){
    		return $this->$field;
    	}
    	elseif (isset($ss_tots[$field])) {
    		$sum = 0;
    		foreach ($ss_tots[$field] as $subfield) {
    			$sum += $this->sig($subfield);
    		}
    		return $sum;
    	}
    	else{
    		echo "Error : CR-Model no such field ".$field;
    		exit();
    	}
    }
}
