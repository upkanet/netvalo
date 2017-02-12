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

	//Bilan Financier
	//Actif Economique
	public function Immo(){
		return $this->bilanN->Immo;
	}

	public function BFR(){
		return $this->bilanN->BFR;
	}

	public function TrezNette(){
		return $this->bilanN->TrezNette;
	}

	public function AE(){
		return $this->bilanN->AE;
	}	

	//Capital Employe
	public function CP(){
		return $this->bilanN->CP;
	}

		public function DetteFi(){
		return $this->bilanN->DetteFi;
	}

		public function CE(){
		return $this->bilanN->CE;
	}

	//Croissance et Renta
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

	public function CA3(){
		return [$this->year => $this->crN->CA, $this->year - 1 => $this->crN1->CA, $this->year - 2 => $this->crN2->CA];
	}

	public function Renta3(){
		return [
			$this->year => [
				'CA' => $this->crN->CA,
				'EBE' => $this->crN->EBE,
				'Rex' => $this->crN->Rex,
				'RN' => $this->crN->RN
			],
			$this->year - 1 => [
				'CA' => $this->crN1->CA,
				'EBE' => $this->crN1->EBE,
				'Rex' => $this->crN1->Rex,
				'RN' => $this->crN1->RN
			],
			$this->year - 2 => [
				'CA' => $this->crN2->CA,
				'EBE' => $this->crN2->EBE,
				'Rex' => $this->crN2->Rex,
				'RN' => $this->crN2->RN
			],
		];
	}


	//Evolution du Bilan
	public function evoBilan(){
		return [
			'Immo' => pourcEvo($this->bilanN->Immo, $this->bilanN1->Immo),
			'BFR' => pourcEvo($this->bilanN->BFR, $this->bilanN1->BFR),
			'TrezNette' => pourcEvo($this->bilanN->TrezNette, $this->bilanN1->TrezNette),
			'AE' => pourcEvo($this->bilanN->AE, $this->bilanN1->AE),
			'CP' => pourcEvo($this->bilanN->CP, $this->bilanN1->CP),
			'DetteFi' => pourcEvo($this->bilanN->DetteFi, $this->bilanN1->DetteFi),
			'CE' => pourcEvo($this->bilanN->CE, $this->bilanN1->CE),
		];
	}


}