<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index(){
    	$users = User::where('id','>','2')->get();
    	return view('admin.dashboard',compact('users'));
    }
}
