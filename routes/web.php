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
//PUBLIC ROUTES
Route::get('/', 'PagesController@index'); 
Route::get('/about', 'PagesController@about'); 
Route::get('/contact', 'PagesController@contact'); 
Route::get('/service', 'PagesController@service');
Route::get('/servicez', 'PagesController@services');

Route::get('/form', function(){
    return view('form');
});


Route::get('/date', function(){
    return view('datepicker');
});

Route::get('/booking', function(){
    return view('booking');
});




// DASHBOARD ROUTES

Route::get('/aduser', 'PagesController@getregister'); 
Route::get('/dashboard', 'PagesController@home'); 
Route::get('/adm', 'PagesController@adm'); 
Route::get('/createuser', 'PagesController@usercreate'); 

//Route::get('/users', 'PagesController@users'); 
Route::get('/orders', 'PagesController@orders'); 
Route::get('/admnservices', 'PagesController@admnserv'); 
Route::get('/admmessages', 'PagesController@admmessages'); 

//MESSAGES ROUTES 
Route::resource('messages','MessagesController');


Route::resource('orders', 'OrdersController');

Route::resource('users', 'UsersController');

Route::resource('services', 'ServicesController');



Auth::routes();

Route::get('/dashboards', 'dashboardsController@index');
