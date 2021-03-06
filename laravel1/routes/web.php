<?php

use App\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('customerinfo', 'Customercontroller@getdata')->name('customerinfo');
//store data

Route::get('customer/create', 'Customercontroller@create', function () {
    dispatch(new App\Observers\CustomerObserver);
    dd('done');
});

Route::post('customer', 'Customercontroller@store')->name('store');

//delete customer 
Route::get('customer/delete/{id}', 'Customercontroller@delete',function(){
    dispatch(new App\Observers\CustomerObserver);
    dd('done');
});

Route::get('customer/edit/{id}', 'Customercontroller@edit')->name('edit');
Route::post('customer/update/{id}', 'Customercontroller@update')->name('update');
// Route::resource('customer/update/', 'Customercontroller');


Route::get('/sendemail', 'MailController@index');
Route::post('/sendemail/send', 'MailController@send');

//send email using queue jobs 
Route::get('email-test', function () {
    $details['email'] = 'jemish.me@gmail.com';
    dispatch(new App\Jobs\SendEmailTest($details));
    dd('done');
});

// image upload
Route::get('upload ', 'Customercontroller@imageUpload')->name('image.upload');

Route::post('upload', 'Customercontroller@imageUploadPost')->name('image.upload.post');



// Laravel Relationship 
Route::get('category/create', 'Relationship\CategoryController@create')->name('category.create');


Route::post('category/store', 'Relationship\CategoryController@store')->name('category.store');

//middelware demo
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
