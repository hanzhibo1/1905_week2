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
    return view('welcome');
});

//支付宝支付
Route::any('alipay','TestController@alipay');





//登录接口
Route::post('/api/login','Api\LoginController@login');
Route::post('/api/reg','Api\LoginController@reg');

Route::get('/api/list','Api\LoginController@list');

Route::any('/api/ascii','Api\LoginController@ascii');
Route::any('/api/dec','Api\LoginController@dec');