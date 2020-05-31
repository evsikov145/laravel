<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    'uses' => 'HomeController@index'
]);

Route::get('/auth', [
    'uses' => 'AuthController@registration'
]);

Route::get('/users', [
    'uses' => 'UserController@showUsers'
]);

Route::match(['post', 'get'], '/auth', [
    'uses' => 'AuthController@registration',
    'as' => 'auth'
]);

Route::group(
    [
        'prefix' => 'news',
        'namespace' => 'News',
        'as' => 'news.'
    ],
    function(){
        Route::get('/', [
            'uses' => 'NewsController@news',
            'as' => 'list'
        ]);
        Route::get('/category', [
            'uses' => 'CategoryController@categoryNews',
            'as' => 'category'
        ]);
        Route::get('/category/{id}', [
            'uses' => 'CategoryController@categoryOne',
            'as' => 'categoryOne'
        ]);
        Route::get('/{id}', [
            'uses' => 'NewsController@newsOne',
            'as' => 'one'
        ]);
    }
);

Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'admin.'
    ],
    function(){
        Route::get('/', [
            'uses' => 'NewsController@news',
            'as' => 'getNews'
        ]);
        Route::match(['post', 'get'],'/add', [
            'uses' => 'NewsController@addNews',
            'as' => 'addNews'
        ]);
        Route::match(['post', 'get'],'/edit/{id}', [
            'uses' => 'NewsController@editNews',
            'as' => 'editNews'
        ]);
        Route::match(['post', 'get'],'/delete/{id}', [
            'uses' => 'NewsController@deleteNews',
            'as' => 'deleteNews'
        ]);
    }
);


