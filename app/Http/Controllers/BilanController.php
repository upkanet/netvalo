<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Bilan;

class BilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$user = User::find(1);
        foreach ($user->bilans as $bilan) {
            $bilan->year;
        }*/
        return 'Bilan';
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
        $fields = config('balance_fields.bilan_fields');
        $slice = 34;
        $fields_actif = array_slice($fields,0,$slice);
        $fields_passif = array_slice($fields,$slice);
        $ss_tots = config('balance_fields.bilan_ss_tot');

        return view('resources.bilans.create', compact('company','year','fields_actif','fields_passif','ss_tots'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bilan = new Bilan;
        $bilan->company_id = $request->input('company_id');
        $bilan->year = $request->input('year');
        //Champs numeriques
        $fields = config('balance_fields.bilan_fields');
        foreach ($fields as $field => $field_name) {
            $bilan->$field = $request->input($field);
        }

        $bilan->save();
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
        $bilan = $company->bilan($year);

        $fields = config('balance_fields.bilan_fields');
        $ss_tots = config('balance_fields.bilan_ss_tot');
        foreach ($ss_tots as $ss_tot_key => $ss_tot_value) {
            //print_r($ss_tot_key.' : '.$bilan->sig($ss_tot_key));
            print_r('SIG '.$ss_tot_key.' : '.$bilan->sig($ss_tot_key).'<br>');
        }
        print_r('<hr>Immo : '.$bilan->Immo.'<hr>');
        print_r('<hr>BFR : '.$bilan->BFR.'<hr>');
        print_r('<hr>TrezNette : '.$bilan->TrezNette.'<hr>');
        print_r('<hr>AE : '.$bilan->AE.'<hr>');
        print_r('<hr>CP : '.$bilan->CP.'<hr>');
        print_r('<hr>Dette Fi : '.$bilan->DetteFi.'<hr>');
        print_r('<hr>CE : '.$bilan->CE.'<hr>');
        return view('bilan', compact('bilan','company','fields'));
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
