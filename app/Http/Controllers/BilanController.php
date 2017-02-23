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
        //
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

        return view('resources.bilan-form', compact('company','year','fields_actif','fields_passif','ss_tots'));
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
            $bilan->$field = ($request->input($field) !== null) ? $request->input($field) : 0;
        }

        $bilan->save();
        return redirect()->route('companies.show',$bilan->company);
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
        $slice = 34;
        $fields_actif = array_slice($fields,0,$slice);
        $fields_passif = array_slice($fields,$slice);
        $ss_tots = config('balance_fields.bilan_ss_tot');

        return view('resources.bilan-form', compact('bilan','company','year','fields_actif','fields_passif','ss_tots'));
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
        $bilan = Bilan::find($id);
        //Champs numeriques
        $fields = config('balance_fields.bilan_fields');
        foreach ($fields as $field => $field_name) {
            $bilan->$field = ($request->input($field) !== null) ? $request->input($field) : 0;
        }
        $bilan->save();
        return redirect()->route('companies.show',$bilan->company);
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
