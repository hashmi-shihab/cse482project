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

/*Route::get('/', function () {
    return view('welcome');
});
*/
// frontend view
Route::get('/','FrontController@index');

Route::get('/brandedpowerbanks','FrontController@brandedpowerbanks');

Route::get('/pricerange','FrontController@pricerange');

Route::get('/pricerange1','FrontController@pricerange1');

Route::get('/pricerange2','FrontController@pricerange2');

Route::get('/pricerange3','FrontController@pricerange3');

Route::get('/BestSellingProducts','FrontController@bestContent');

Route::get('/colors','FrontController@colorContent');

Route::get('/redcolors','FrontController@colorContent1');

Route::get('/whitecolors','FrontController@colorContent2');

Route::get('/blackcolors','FrontController@colorContent3');

Route::get('/bluecolors','FrontController@colorContent4');

Route::get('/poweroffer','FrontController@offerContent');

Route::get('/about','FrontController@aboutContent');

Route::get('/services','FrontController@serviceContent');

Route::get('/privacy','FrontController@privacyContent');

Route::get('/SignIn&SignUp','FrontController@logContent');













// backend view
Route::get('/admin','AdminController@index');

Route::get('/dashboard','AdminController@dash');
Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/logout','SuperAdminController@logout');
