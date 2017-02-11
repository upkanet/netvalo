<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Bilan extends Model
{
    

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }

    public function sig($field){
    	$bilan_fields = config('balance_fields.bilan_fields');
    	$ss_tots = config('balance_fields.bilan_ss_tot');

    	if(isset($bilan_fields[$field])){
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
    		echo "Error : Bilan-Model no such field ".$field;
    		exit();
    	}
    }
}
