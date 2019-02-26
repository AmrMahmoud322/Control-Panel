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



// Routes for Assist , Admin
Route::group(['middleware'=>'assist'], function ()
{

        Route::get('/admin/bill/new','billController@create');
        
});

// Routes for Admin

Route::group(['middleware'=>'admin'], function ()
{
    Route::get('/admin/product/new','ProductController@create');
    Route::resource('/admin/product', 'ProductController');
   
    Route::resource('/admin/bill', 'billController');

    Route::get('/admin/user/list','AdminController@index');
    Route::get('/admin/user/new','AdminController@create');
    Route::resource('/admin/user', 'AdminController');
    Route::post('/admin/user/new',[
        'uses' => 'AdminController@store',
        'as' => 'admin.user.new',
    ]);

    Route::get('/admin/report',[
        'uses' => 'ReportController@index',
        'as' => 'admin.report.index',
    ]);

});

Route::get('/admin/product/{id}',[
    'uses' => 'ProductController@show',
    'as' => 'admin.product.show',
    'middleware' => 'assist'
]);

Route::get('/admin/panel',[
    'uses' => 'AdminController@panal',
    'middleware' => 'assist'
]); 
Route::get('/admin/product/',[
    'uses' => 'ProductController@index',
    'middleware' => 'assist'
]);

Route::post('/admin/bill/add',[
    'uses' => 'billController@store',
    'middleware' => 'assist',
    'as' => 'admin.bill.add'
]);

Route::get('/admin/bill/{id}',[
    'uses' => 'billController@show',
    'middleware' => 'assist',
    'as' => 'admin.bill.show'
]);
Route::get('/admin/bill/',[
    'uses' => 'billController@index',
    'middleware' => 'assist',
    'as' => 'admin.bill.index'
]);


// Routes for User , Assist , Admin

Route::get('/',[
    'uses' => 'HomeController@index',
    'as' => 'welcome'
]);

Route::get('/home',[
    'uses' => 'HomeController@home',
    'as' => 'home'
]);

Auth::routes();