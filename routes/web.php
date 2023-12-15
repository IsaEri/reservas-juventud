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
Route::get('/registros/pdf','RegistroController@pdf');
Route::resource("/salon_actos","Sala_actoController");
Route::resource("/sala_espejos","Sala_espejoController");
Route::resource("/sala_asociaciones","Sala_asociacioneController");
Route::resource("/sala_multiusos_exteriors","Sala_multiusos_exteriorController");
Route::resource("/sala_multiusos_interiors","Sala_multiusos_interiorController");
Route::resource("/sala_estudios","Sala_estudioController");
Route::resource("/sala_32estudios","Sala_32estudioController");
Route::resource("/sala_informaticas","Sala_informaticaController");
Route::resource("/sala_juegos","Sala_juegoController");
Route::resource("/sala_corchos","Sala_corchoController");
Route::resource("/sala_3reuniones","Sala_3reunioneController");
Route::resource("/sala_4reuniones","Sala_4reunioneController");
Route::resource("/sala_reuniones","Sala_reunioneController");
Route::resource("/galeria_exposiciones","Galeria_exposicioneController");
Route::resource("/galeria_exposicione_bajas","Galeria_exposicione_bajaController");
Route::resource("/users","UserController");
Route::resource("/registros","RegistroController");
Route::resource("/peticions","PeticionController");


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
