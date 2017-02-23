<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\CR;

class CompteResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toto = array_keys(config('balance_fields.cr_fields'));
        foreach ($toto as $field) {
            print_r($field);
        }
        return "CR";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $year = $_GET['year'];
        $company = Company::find($_GET['company']);
        $fields = config('balance_fields.cr_fields');
        $ss_tots = config('balance_fields.cr_ss_tot');

        return view('resources.cr-form', compact('company','year','fields','ss_tots'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cr = new CR;
        $cr->company_id = $request->input('company_id');
        $cr->year = $request->input('year');
        //Champs numeriques
        $fields = config('balance_fields.cr_fields');
        foreach ($fields as $field => $field_name) {
            $cr->$field = ($request->input($field) !== null) ? $request->input($field) : 0;
        }

        $cr->save();
        return "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($companyId, $year)
    {
        $company = Company::find($companyId);
        $cr = $company->cr($year);

        $fields = config('balance_fields.cr_fields');
        $ss_tots = config('balance_fields.cr_ss_tot');
        foreach ($ss_tots as $ss_tot_key => $ss_tot_value) {
            print_r('SIG '.$ss_tot_key.' : '.$cr->sig($ss_tot_key).'<br>');
        }
        print_r('<hr>CA : '.$cr->CA.'<hr>');
        print_r('<hr>MargeComm : '.$cr->MargeComm.'<hr>');
        print_r('<hr>ProdExe : '.$cr->ProdExe.'<hr>');
        print_r('<hr>MargeProd : '.$cr->MargeProd.'<hr>');
        print_r('<hr>MargeGlob : '.$cr->MargeGlob.'<hr>');
        print_r('<hr>VA : '.$cr->VA.'<hr>');
        print_r('<hr>EBE : '.$cr->EBE.'<hr>');
        print_r('<hr>Rex : '.$cr->Rex.'<hr>');
        print_r('<hr>Rfi : '.$cr->Rfi.'<hr>');
        print_r('<hr>RCAI : '.$cr->RCAI.'<hr>');
        print_r('<hr>Rexcep : '.$cr->Rexcep.'<hr>');
        print_r('<hr>RN : '.$cr->RN.'<hr>');
        print_r('<hr>CAF : '.$cr->CAF.'<hr>');
        return view('cr', compact('cr','company','fields'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
