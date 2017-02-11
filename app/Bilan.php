<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Bilan extends Model
{
    protected $appends = ['Immo', 'Stocks', 'CreancesExploit', 'DettesExploit', 'BFR', 'TrezNette', 'AE', 'CP', 'DetteFi', 'CE'];

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

    //Actif Economique
    public function getImmoAttribute(){
    	return $this->sig('actif_imm');
    }

    public function getStocksAttribute(){
    	return $this->sig('stocks');
    }

    public function getCreancesExploitAttribute(){
    	return $this->sig('creances_exploit');
    }

    public function getDettesExploitAttribute(){
    	return $this->sig('dettes_exploit') - $this->sig('prod_ca');
    }

    public function getBFRAttribute(){
    	return $this->stocks + $this->creances_exploit - $this->dettes_exploit;
    }

    public function getTrezNetteAttribute(){
    	return $this->sig('ac_div') + $this->sig('comptes_regul');
    }

    public function getAEAttribute(){
    	return $this->Immo + $this->BFR + $this->TrezNette;
    }

    //Capital Employe
    public function getCPAttribute(){
    	return $this->sig('capitaux_propres') + $this->sig('autres_fds_propres') + $this->sig('prov_rc');
    }

    public function getDetteFiAttribute(){
    	return $this->sig('dettes_fi');
    }

    public function getCEAttribute(){
    	return $this->CP + $this->DetteFi;
    }
}
