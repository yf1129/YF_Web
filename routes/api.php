<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/getUserList','AdminController@getUserList');

//$api = app('Dingo\Api\Routing\Router');
Route::group([

    'middleware' => 'api',
    // 'namespace' => 'App\Http\Controllers',// 这一行不需要加，AuthController中已配置namespace，否则运行时会在App\Http\Controllers\App\Http\Controllers\AuthController 下寻找AuthController，从而报找不到控制器的错
    'prefix' => 'auth'

], function ($api) {

    Route::any('login', 'AuthController@login');
    Route::any('logout', 'AuthController@logout');
    Route::any('refresh', 'AuthController@refresh');
    Route::any('me', 'AuthController@me');

});
/*
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers\Api\V1'], function($api) {
    $api->post('token', 'UserController@token');    //获取token
    $api->post('refresh-token', 'UserController@refershToken'); //刷新token

    $api->group(['middleware' => ['auth:api']], function($api) {
        $api->post('logout', 'UserController@logout');    //登出
        $api->get('me', 'UserController@me');    //关于我
    });

});*/