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

Route::get('/', function () {
    return view('welcome');
});

//Gestion de l'authentification
Auth::routes();

//Accueil Utilisateurs
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies', 'CompanyController', ['except' => ['index']]);

//Bilan sauf index (déjà dans vue Company), show (url depuis Company), edit (car fusion avec le show)
Route::resource('bilans', 'BilanController', ['except' => ['index', 'show', 'edit']]);
Route::get('/companies/{company}/bilan/{year}','BilanController@show');

//CR sauf index (déjà dans vue Company), show (url depuis Company), edit (car fusion avec le show)
Route::resource('crs', 'CompteResultatController', ['except' => ['index', 'show', 'edit']]);
Route::get('/companies/{company}/cr/{year}','CompteResultatController@show');

//Analysis
Route::get('/companies/{company}/analysis/{year}','AnalysisController@show');

//Requetes
Route::post('/requests','RequestController@store')->name('requests.store');


//Admin
Route::get('/dashboard', function() {
    return "this page requires that you be logged in and an Admin";
})->middleware('auth','admin');

