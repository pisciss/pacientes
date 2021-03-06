<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/pacientes', 'PacienteController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pacientes', 'PacienteController');
Route::get('dataTablePaciente','PacienteController@dataTable')->name('dataTablePaciente');