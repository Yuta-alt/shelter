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


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete');
    
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
    
    Route::get('shelter/create', 'Admin\SheltersController@add');
    Route::post('shelter/create', 'Admin\SheltersController@create');
    Route::get('shelter', 'Admin\SheltersController@index');
    Route::get('shelter/edit', 'Admin\SheltersController@edit');
    Route::post('shelter/edit', 'Admin\SheltersController@update');
    Route::get('shelter/delete', 'Admin\SheltersController@delete');
    
    Route::get('mypage', 'Admin\MypageController@index');
    Route::get('mypage/edit', 'Admin\MypageController@edit');
    Route::post('mypage/edit', 'Admin\MypageController@edit');
    
    Route::get('family/create', 'Admin\FamilyController@add');
    Route::post('family/create', 'Admin\FamilyController@create');
    Route::get('family', 'Admin\FamilyController@index');
    Route::get('family/edit', 'Admin\FamilyController@edit');
    Route::post('family/edit', 'Admin\FamilyController@update');
    Route::get('family/delete', 'Admin\FamilyController@delete');
    
});

Auth::routes();

Route::get('/home', 'Admin\TopController@index')->name('home');

// Route::get('/', 'Admin\NewsController@index')->middleware('auth');
Route::get('/', 'Admin\TopController@index')->middleware('auth');
