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
/***************************************我的接口******************************************************************/
Route::prefix('api')->group(function(){
    Route::post('shop/add','Api\MyapiController@add');//商品添加
    Route::get('shop/show','Api\MyapiController@show');//商品数据展示
});
