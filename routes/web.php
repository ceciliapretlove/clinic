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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');


//Patient's Appointment
Route::get('/patient/register', 'PatientController@index');
Route::get('/patient/readPatientAppointment','PatientController@read');
Route::post('/patient/createPatientAppointmentForm', 'PatientController@create');
Route::post('/patient/getPatientAppointment', 'PatientController@get');
Route::post('/patient/updatePatientAppointmentForm', 'PatientController@update');