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


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
    Route::get('profile/delete', 'Admin\ProfileController@delete')->middleware('auth');
    
    Route::get('shelter/create', 'Admin\SheltersController@add')->middleware('auth');
    Route::post('shelter/create', 'Admin\SheltersController@create')->middleware('auth');
    Route::get('shelter', 'Admin\SheltersController@index')->middleware('auth');
    Route::get('shelter/edit', 'Admin\SheltersController@edit')->middleware('auth');
    Route::post('shelter/edit', 'Admin\SheltersController@update')->middleware('auth');
    Route::get('shelter/delete', 'Admin\SheltersController@delete')->middleware('auth');
    
    Route::get('mypage', 'Admin\MypageController@index')->middleware('auth');
    Route::get('mypage/edit', 'Admin\MypageController@edit')->middleware('auth');
    Route::post('mypage/edit', 'Admin\MypageController@edit')->middleware('auth');
    
    Route::get('family/create', 'Admin\FamilyController@add')->middleware('auth');
    Route::post('family/create', 'Admin\FamilyController@create')->middleware('auth');
    Route::get('family', 'Admin\FamilyController@index')->middleware('auth');
    Route::get('family/edit', 'Admin\FamilyController@edit')->middleware('auth');
    Route::post('family/edit', 'Admin\FamilyController@update')->middleware('auth');
    Route::get('family/delete', 'Admin\FamilyController@delete')->middleware('auth');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', 'Admin\NewsController@index')->middleware('auth');
Route::get('/', 'Admin\TopController@index')->middleware('auth');
