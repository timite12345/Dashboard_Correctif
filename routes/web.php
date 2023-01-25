<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
Route::get('firebase','FirebaseController@index');
Route::post('/', [FormController::class, 'create'])->name('saveUser');
Route::get('/', [FormController::class, 'index']);


Route::get('/FormEmploy', function () {
    return view('FormEmploy');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/widgets', function () {
    return view('widgets');
});

Route::get('/chartjs', function () {
    return view('chartjs');
});


Route::get('/AjouterMission', function () {
    return view('AjouterMission');
});

Route::get('/HistoriqueMission', function () {
    return view('HistoriqueMission');
});


