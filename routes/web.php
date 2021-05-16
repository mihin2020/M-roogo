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
Route::resource('ajout_bien','Ajout_bienController');
Route::resource('dash', 'ParametreController');
Route::post('dash_bien', 'Parametre_bienController@store_bien');
Route::post('ressource', 'Parametre_ressourceController@store_ressource');
Route::resource('accueil', 'AccueilController');// controlleur dashboard de l'administrateur
Route::get('inscription', 'UserController@index')->name('inscription');

Route::post('user-store', 'UserController@userPostRegistration');
// Route::resource('/inscription','InscriptionController');

Route::get('connexion', 'UserController@userLoginIndex')->name('connexion');

Route::post('login', 'UserController@userPostLogin');

Route::get('dashboard', 'UserController@dashboard');

Route::get('logout', 'UserController@logout');
 









