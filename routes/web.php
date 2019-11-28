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


//ANIMALS
Route::get('/animals', 'AnimalController@showAnimals')->name('animals');
Auth::routes();

Route::get('/animalCreate', 'AnimalController@create')->name('create');
Route::post('/store', 'AnimalController@store')->name('store');

Route::get('/animals/{id}', 'AnimalController@edit')->name('edit');
Route::post('/update/{id}', 'AnimalController@update')->name('update');
Route::post('/delete/{id}', 'AnimalController@delete')->name('delete');

//Race
Route::get('/races', 'RaceController@showRaces')->name('races');
Auth::routes();

Route::get('/raceCreate', 'RaceController@create')->name('createRaces');
Route::post('/store', 'RaceController@store')->name('raceStore');

Route::get('/races/{id}', 'RaceController@edit')->name('editRace');
Route::post('/update/{id}', 'RaceController@update')->name('updateRace');
// Route::post('/delete/{id}', 'RaceController@delete')->name('deleteRace');

//HOME
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

