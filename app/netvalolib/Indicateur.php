<?php
namespace App\netvalolib;
use App\Company;
use App\Bilan;
use App\CR;

class Indicateur
{
	public $year,$company;
	private $bilanN, $bilanN1;
	private $crN, $crN1, $crN2;

	public function __construct(Company $company, $year){
		$this->year = $year;
		$this->company = $company;

		//Load Bilans
    	$this->bilanN = $this->company->bilan($year);
    	$this->bilanN1 = $this->company->bilan($year-1);
    	//Load CRs
    	$this->crN = $this->company->cr($year);
    	$this->crN1 = $this->company->cr($year-1);
    	$this->crN2 = $this->company->cr($year-2);
	}

	public static function availableYears(Company $company){
		return 0;
	}

	public function CAGR(){
		return intval((sqrt($this->crN->CA / $this->crN2->CA) - 1) * 100);
	}

	public function ROCE(){
		return intval(($this->crN->Rex * (1 - 0.33) / $this->bilanN->CE) * 100);
	}

	public function MargeOp(){
		return intval($this->crN->Rex / $this->crN->CA * 100);
	}

	public function BCG(){
		$rezBCG = -1;
		if($this->CAGR() > 0){
    		if($this->ROCE() > 7){
    			$rezBCG = config('indicator.bcg.star');
    		}
    		else{
    			$rezBCG = config('indicator.bcg.dilemma');
    		}
    	}
    	else{
			if($this->ROCE() > 7){
    			$rezBCG = config('indicator.bcg.cashcow');
			}   
			else{
    			$rezBCG = config('indicator.bcg.deadend');
			} 		
    	}

    	return $rezBCG;
	}


}