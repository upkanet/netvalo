<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CR extends Model
{
    protected $table = 'crs';
    protected $appends = ['CA', 'Rex', 'Rfi', 'RCAI', 'Rexcep', 'RN'];

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

    public function getCAAttribute(){
    	return $this->sig('CAnet');
    }

    public function getRexAttribute(){
    	return $this->sig('prod_exploit') - $this->sig('charges_exploit');
    }

    public function getRfiAttribute(){
    	return $this->sig('prod_fi') - $this->sig('charges_fi');
    }

    public function getRCAIAttribute(){
    	return $this->Rex + $this->sig('op_commun') + $this->Rfi;
    }

    public function getRexcepAttribute(){
    	return $this->sig('prod_excep') - $this->sig('charges_excep');
    }

    public function getRNAttribute(){
    	return $this->sig('prod') - $this->sig('charges');
    }
}
