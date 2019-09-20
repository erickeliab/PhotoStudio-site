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

    Route::post('/pressorder', 'bookingsController@add');
    Route::get('/form', function(){
        return view('form');
    });


    Route::get('/date', function(){
        return view('admin.edituser');
    });

    Route::get('/booking', function(){
        return view('booking');
    });




// DASHBOARD ROUTES

        Route::get('/aduser', 'UsersController@getregister'); 
      
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

        Route::resource('expens', 'ExpensController');

        Route::resource('finances', 'FinanceController');

        Route::resource('reports', 'ReportsController');

        Auth::routes();

        Route::get('/dashboards', 'dashboardsController@index');
