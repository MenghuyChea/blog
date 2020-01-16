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

use App\Http\Controllers\FrontEndController;

Route::get('/', 'FrontEndController@index');
Route::get('/homepage', 'FrontEndController@index');
Route::get('/menu', 'FrontEndController@menu');
Route::get('/contact','FrontEndController@contact');
Route::post('/add_feedback','FrontEndController@add');
Route::get('/reservation','FrontEndController@reservation');
Route::post('/booktable','FrontEndController@book');
Route::get('/chief1','FrontEndController@chief');
Route::get('/shop','FrontEndController@shop');

//food
Route::get('/food', 'CreatesController@index');
Route::get('/create_food', 'CreatesController@create_food');
Route::post('/insert', 'CreatesController@add')->name('insert');
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');
Route::get('/read/{id}', 'CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete');

//drink
Route::get('/drink', 'CreatesDrinkController@index');
Route::get('/create_drink', 'CreatesDrinkController@create_drink');
Route::post('/insert_drink', 'CreatesDrinkController@add')->name('insert_drink');
Route::get('/update_drink/{id}', 'CreatesDrinkController@update');
Route::post('/edit_drink/{id}', 'CreatesDrinkController@edit');
Route::get('/read_drink/{id}', 'CreatesDrinkController@read');
Route::get('/delete_drink/{id}', 'CreatesDrinkController@delete');

//book
Route::get('/book', 'CreatesBookController@index');
Route::get('/read_book/{id}', 'CreatesBookController@read');
Route::get('/create_book', 'CreatesBookController@create_Book');
Route::post('/insert_book', 'CreatesBookController@add');
Route::get('/update_book/{id}', 'CreatesBookController@update');
Route::post('/edit_book/{id}', 'CreatesBookController@edit');
Route::get('/delete_book/{id}', 'CreatesBookController@delete');

//Chief
Route::get('/chief','CreatesChiefController@index');
Route::get('/read_chief/{id}', 'CreatesChiefController@read');
Route::get('/create_chief', 'CreatesChiefController@create_chief');
Route::post('/insert_chief', 'CreatesChiefController@add')->name('insert_chief');
Route::get('/update_chief/{id}', 'CreatesChiefController@update');
Route::post('/edit_chief/{id}', 'CreatesChiefController@edit');
Route::get('/delete_chief/{id}', 'CreatesChiefController@delete');

//login admin
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','LoginController@logout');

//Feedback
Route::get('/feedback','CreatesFeedBackController@index');
Route::get('/read_feed/{id}', 'CreatesFeedBackController@read');
Route::get('/create_feed', 'CreatesFeedBackController@create_feed');
Route::post('/insert_feed', 'CreatesFeedBackController@add');
Route::get('/update_feed/{id}', 'CreatesFeedBackController@update');
Route::post('/edit_feed/{id}', 'CreatesFeedBackController@edit');
Route::get('/delete_feed/{id}', 'CreatesFeedBackController@delete');
