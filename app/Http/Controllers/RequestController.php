<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Company;

class RequestController extends Controller
{
    public function store(Request $request)
    {
    	$user = Auth::user();
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->phone = $request->input('phone');
    	$user->street = $request->input('street');
    	$user->zipcode = $request->input('zipcode');
    	$user->city = $request->input('city');
    	$user->save();

        $rtype_array = nvReqTypes();

        $req = new \App\Request();
        
        $rtype = \App\RequestType::firstOrNew(['acronyme' => $request->input('rtype')]);
        $rtype->name = $rtype_array[$request->input('rtype')]['title'];
        $rtype->save();

    	$rlevel = \App\RequestLevel::where('level',0)->first();
    	$company = Company::find($request->input('company_id'));
    	$req->company()->associate($company);
    	$req->type()->associate($rtype);
    	$req->level()->associate($rlevel);
    	$req->user()->associate($user);
    	$req->valo_year = $request->input('valo_year');

    	$snapshot = ['message' => $request->input('message')];
    	$req->snapshot = json_encode($snapshot);
    	var_dump($req->toArray());
    	$req->save();

    	return redirect()->route('home');

    	
    }
}
