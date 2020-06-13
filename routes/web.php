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

Route::get('/auth/vk', 'Auth\VkController@login' )->name('vk.login');
Route::get('/auth/callback', 'Auth\VkController@response' )->name('vk.callback');

Route::get('/parser', function(){
    $xml = XmlParser::load('https://www.cbsnews.com/latest/rss/world');
    $content = $xml->parse([
        'title' => ['uses' => 'channel.title'],
        'description' => ['uses' => 'channel.description'],
        'link' => ['uses' => 'channel.link'],
        'item' => ['uses' => 'channel.item[title,link,description]']
    ]);
    dd($content);
});

Route::group(['middleware' => 'auth'], function(){

        Route::resource('/categories', 'News\CategoryController');
        Route::resource('/news', 'News\NewsController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
