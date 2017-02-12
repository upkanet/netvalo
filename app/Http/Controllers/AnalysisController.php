<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Bilan;
use App\CR;
use App\netvalolib\Indicateur;
use App\netvalolib\LiasseFiscPond;

class AnalysisController extends Controller
{
    public function show($companyId, $year){
    	$company = Company::find($companyId);
    	$indic = new Indicateur($company, $year);
    	$lfpond = new LiasseFiscPond($company, $year);

    	print_r($lfpond->CA());
    	
    	return view('analysis', compact('company', 'indic'));
    }
}
