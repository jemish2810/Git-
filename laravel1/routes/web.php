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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users', 'UserController@index')->name('users');

//Get data
Route::get('customer', 'Customercontroller@index')->name('customer');
//delete customer 
Route::get('customer/delete/{id}', 'Customercontroller@delete')->name('delete');


Route::get('/sendemail', 'MailController@index');
Route::post('/sendemail/send', 'MailController@send');
