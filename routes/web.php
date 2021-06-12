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


Route::resource('mes_locations','LocationController');
Route::resource('mes_locataires','LocatairesController');


Route::resource('ajout_bien','Ajout_bienController');
// Route::get('/delete/{id}','SuppController@destroy');
// Route::get('/delete/{id}','SuppController@destroy_locataire');
// Route::get('/delete/{id}','SuppController@destroy_location');

// Route::resource('dash', 'ParametreController');
Route::post('dash_bien', 'Parametre_bienController@store_bien');
Route::post('ressource', 'Parametre_ressourceController@store_ressource');
Route::resource('accueil', 'AccueilController');// controlleur dashboard de l'administrateur
Route::get('inscription', 'UserController@index')->name('inscription');

Route::post('user-store', 'UserController@userPostRegistration');
// Route::resource('/inscription','InscriptionController');

Route::get('connexion', 'UserController@userLoginIndex')->name('connexion');

Route::post('login', 'UserController@userPostLogin');

Route::post('/update', 'UserController@Update_account')->name('update');
Route::get('modifier', 'UserController@Vue');

Route::get('Update_bien','Bien_updateController@Vue');

Route::get('dashboard', 'UserController@dashboard');
Route::get('locataires.locataire', 'UserController@locataire');

Route::get('logout', 'UserController@logout');
 
Route::get('bail','BailController@show_bail');
Route::resource('paiement','PaiementController');
Route::get('create','CreateController@create');



Route::resource('setting_bien','Setting_bienController');
Route::resource('setting_type','Setting_typeController');
Route::resource('setting_ressource','Setting_ressourceController');








