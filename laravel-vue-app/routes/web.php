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

Route::get('/text', function () {
    return view('welcome');
});

Route::get('/top', 'SampleController@top');

Route::get('/g_all', 'SampleController@g_all');

Route::get('/g_detail/{g_name}', 'SampleController@g_detail');

Route::get('/gt_detail/{gt_name}', 'SampleController@gt_detail');

Route::get('/t_detail/{t_name}', 'SampleController@t_detail');

Route::get('/search', 'SampleController@search');

Route::get('/search_result', 'SampleController@search_result');

Route::get('/access', 'SampleController@access');

Route::get('/a', 'SampleController@a');