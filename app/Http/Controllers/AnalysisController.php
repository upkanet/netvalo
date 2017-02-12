<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Bilan;
use App\CR;
use App\netvalolib\Indicateur;

class AnalysisController extends Controller
{
    public function show($companyId, $year){
    	$company = Company::find($companyId);
    	$indic = new Indicateur($company, $year);
    	
    	return view('analysis', compact('company', 'indic'));
    }
}
