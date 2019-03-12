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
    return view('welcome', ['website' => '欢迎来到媛飞工作室', 'title' => '媛飞工作室']);
});

//Route::view('view', 'welcome', ['website' => 'Laravel学院']);

Route::any('hello', function (){
   return "Hello welcome to YF's studio";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
