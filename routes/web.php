<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Event::listen('illuminate.query',function($query){
	var_dump($query);
});

Route::get('/', function () {
    return view('welcome');
});

//Gestion de l'authentification
Auth::routes();

//Accueil Utilisateurs
Route::get('/home', 'HomeController@index');

Route::resource('companies', 'CompanyController', ['except' => ['index']]);

//Bilan sauf index (déjà dans vue Company), show (url depuis Company), edit (car fusion avec le show)
Route::resource('bilans', 'BilanController', ['except' => ['index', 'show', 'edit']]);
Route::get('/companies/{company}/bilan/{year}','BilanController@show');

//CR sauf index (déjà dans vue Company), show (url depuis Company), edit (car fusion avec le show)
Route::resource('crs', 'CompteResultatController', ['except' => ['index', 'show', 'edit']]);
Route::get('/companies/{company}/cr/{year}','CompteResultatController@show');

//Analysis
Route::get('/companies/{company}/analysis/{year}','AnalysisController@show');

