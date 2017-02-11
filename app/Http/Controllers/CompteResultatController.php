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
    public function show($id)
    {
        $cr = CR::find($id);
        $company = $cr->company;
        $fields = config('balance_fields.cr_fields');
        $ss_tots = config('balance_fields.cr_ss_tot');
        foreach ($ss_tots as $ss_tot_key => $ss_tot_value) {
            print_r('SIG '.$ss_tot_key.' : '.$cr->sig($ss_tot_key).'<br>');
        }
        print_r('<hr>CA : '.$cr->CA.'<hr>');
        print_r('<hr>Rex : '.$cr->Rex.'<hr>');
        print_r('<hr>Rfi : '.$cr->Rfi.'<hr>');
        print_r('<hr>RCAI : '.$cr->RCAI.'<hr>');
        print_r('<hr>Rexcep : '.$cr->Rexcep.'<hr>');
        print_r('<hr>RN : '.$cr->RN.'<hr>');
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
