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
        return redirect()->route('companies.show',$cr->company);
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

        return view('resources.cr-form', compact('cr','company','year','fields','ss_tots'));
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
        $cr = CR::find($id);
        //Champs numeriques
        $fields = config('balance_fields.cr_fields');
        foreach ($fields as $field => $field_name) {
            $cr->$field = ($request->input($field) !== null) ? $request->input($field) : 0;
        }
        $cr->save();
        return redirect()->route('companies.show',$cr->company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cr = CR::find($id);
        $cr->delete();
    }
}
