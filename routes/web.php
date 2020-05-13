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
        Route::get('/{id}', [
            'uses' => 'NewsController@newsOne',
            'as' => 'one'
        ]);

    }
);

Route::get('/category', [
    'uses' => 'NewsCategory\CategoryController@categoryNews',
    'as' => 'category'
]);
