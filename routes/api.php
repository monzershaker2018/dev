<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MobileController;

Route::group(['middleware' => 'api'], function () {

    Route::get('get-all-mobiles', 'App\Http\Controllers\MobileController@index');

    Route::get('get-category/{category_id}' , 'App\Http\Controllers\MobileController@getCategoryItems');

    Route::get('show-mobile/{id}' , 'App\Http\Controllers\MobileController@show');



});




