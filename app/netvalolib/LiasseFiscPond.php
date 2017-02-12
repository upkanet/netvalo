<?php
namespace App\netvalolib;
use App\Company;
use App\Bilan;
use App\CR;

class LiasseFiscPond
{
	public $year,$company;
	private $bilanN;
	private $crN, $crN1, $crN2;
	private $coeffN, $coeffN1, $coeffN2;

	public function __construct(Company $company, $year){
		$this->year = $year;
		$this->company = $company;

		//Set coeff
		$this->coeffN = 3;
		$this->coeffN1 = 2;
		$this->coeffN2 = 1;

		//Load Bilans
    	$this->bilanN = $this->company->bilan($year);
    	//Load CRs
    	$this->crN = $this->company->cr($year);
    	$this->crN1 = $this->company->cr($year-1);
    	$this->crN2 = $this->company->cr($year-2);
	}

	private function pondCRval($val_name){
		return round(($this->crN->$val_name * $this->coeffN + $this->crN1->$val_name * $this->coeffN1 + $this->crN2->$val_name * $this->coeffN2) / ($this->coeffN + $this->coeffN1 + $this->coeffN2));
	}

	public function CA(){
		return $this->pondCRval('CA');
	}

	public function EBE(){
		return $this->pondCRval('EBE');
	}

	public function Rex(){
		return $this->pondCRval('Rex');
	}

	public function RN(){
		return $this->pondCRval('RN');
	}

	public function CAF(){
		return $this->pondCRval('CAF');
	}

	public function endtLT(){
		return $this->bilanN->DetteFi;
	}

	public function trezLT(){
		return $this->bilanN->TrezNette;
	}

	public function CP(){
		return $this->bilanN->CP;
	}

}