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

Route::get('/demo/search', 'DemoController@search')->name('demo.search');
Route::post('/demo/search/results', 'DemoController@searchResults')->name('demo.search.results');

Route::get('/demo/geo', 'DemoController@geo')->name('demo.geo');
Route::post('/demo/geo/results', 'DemoController@geoResults')->name('demo.geo.results');