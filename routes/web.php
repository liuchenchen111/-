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

//找律师
Route::any('/find_law', 'FindLawController@FindLaw');

//常识
Route::any('/commons', 'CommonsController@Commons');

//个人中心
Route::any('/mys', 'MyController@My');

//律师注册
Route::any('/law_login', 'LawLoginController@LawLogin');



