<?php
namespace App\netvalolib;
use App\Company;
use App\Bilan;
use App\CR;
use App\netvalolib\LiasseFiscPond;

class Valo
{
	public $year,$company;
	private $lfpond;

	public function __construct(Company $company, $year){
		$this->lfpond = new LiasseFiscPond($company, $year);
	}

	//Methode Patrimoniale
	public function val_patri($nb_year_clients = 1, $val_imm_co = null){
		if(is_null($val_imm_co)) $val_imm_co = $this->lfpond->bilanN->sig('imm_co');
		return $this->lfpond->bilanN->CP + $this->lfpond->RN() * $nb_year_clients - $this->lfpond->bilanN->sig('fds_comm') + $val_imm_co - $this->lfpond->bilanN->sig('imm_co');
	}

	//Methode de rentabilite
	public function val_prod($tx_cap = 0.16){
		return round($this->lfpond->RN() / $tx_cap);
	}

	public function cap_rn($coeff_rend = 6){
		return $this->lfpond->RN() * $coeff_rend;
	}

	public function cap_ebe_corr($nb_year = 3.75){
		return $this->lfpond->EBE() * $nb_year - $this->lfpond->endtLT();
	}

	public function cap_caf($nb_year = 5){
		return $this->lfpond->CAF() * $nb_year;
	}

	//Methodes Mixtes
	public function cap_caf_trez($nb_year = 5){
		return $this->lfpond->CAF() * $nb_year + $this->lfpond->trezLT();
	}

	public function cap_risque($nb_year = 5){
		return ($this->lfpond->Rex() - $this->lfpond->crN->sig('part_sal')) * $nb_year - $this->lfpond->endtLT() + $this->lfpond->trezLT() ;
	}

	//Methode repreneur
	public function val_caf_pret($part_dispo = 0.7, $nb_year = 7, $tx_int = 0.04, $part_autofi = 0.25){
		$anuite = round($this->lfpond->CAF() * $part_dispo);
		$cap_emprunt = round($anuite * (1-pow((1+$tx_int),(-1*$nb_year))) / $tx_int);
		$app_necess = round($part_autofi / (1 - $part_autofi) * $cap_emprunt);
		return $cap_emprunt + $app_necess;
	}

	public function list(){
		$methodes = ['val_patri', 'val_prod', 'cap_rn', 'cap_ebe_corr', 'cap_caf', 'cap_caf_trez', 'cap_risque', 'val_caf_pret'];
		$result = [];

		foreach($methodes as $methode){
			$result[$methode] = $this->$methode();
		}

		return $result;
	}

	public function fourchette(){
		$l = $this->list();
		$sd = round(stddev($l));
		sort($l, SORT_NUMERIC);
		array_shift($l);
		array_pop($l);
		$sum = array_sum($l);
		$average = round($sum / count($l));
		print_r($sd);

		return [
			'low' => round($average - $sd / 2),
			'avg_ec' => $average,
			'high' => round($average + $sd / 2),
		];

	}
}