<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Acquista;
use App\Models\Carrello;

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
    return redirect ('/home'); 
});

//HOME NON LOGGATO
Route::get('/home', "HomeController@home");

//SIGNUP
Route::get('/signup', "SignupController@signup");
Route::post('/signup', "SignupController@creaUtente");
Route::get('/signupControlloUtente', "SignupController@checkUtente");

//LOGIN
Route::get('/login', "LoginController@login");
Route::post('/login', "LoginController@checkLogin");

//LOGOUT
Route::get('/logout', "LoginController@logout");

//HOMELOG
Route::get('/homelog', "HomelogController@homelog");
Route::get('/homelogProdotti', "HomelogController@recuperaprodotti");

//API
Route::get('apicocktail/{cockatil}', "HomelogController@apicocktail");
Route::get('apirestgin', "HomelogController@apigin");
Route::get('apirestdistillate', "HomelogController@apidistillate");
Route::get('apirestliquor', "HomelogController@apiliquor");
Route::get('apirestliqueur', "HomelogController@apiliqueur");
Route::get('apirestbitter', "HomelogController@apibitter");
Route::get('apirestinfuse', "HomelogController@apiinfuse");

//CARRELLO
Route::get('/carrello', 'CarrelloController@carrello');
Route::get('/carrelloProdotti', 'CarrelloController@carprod');
Route::get('/eliminaCarrello/{tit_prod}', 'CarrelloController@eliminaprod');
Route::get('aggiungiCarrello/{tit_prodotto}', 'CarrelloController@addCarrello');

//ACQUISTI
Route::get('/acquisti', 'AcquistaController@acquisto');
Route::get('/prodottiAcquistati', 'AcquistaController@prodacqu');
Route::get('/aggiungiAcquisto/{tit_prodotto}/{quantita}/{prezzo}/{citta}/{cell}/{ind}', 'AcquistaController@addAcq');
