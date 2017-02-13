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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
