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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    // index page
    Route::get('/' , 'HomeController@index')->name('index_page');
    // team page
    Route::get('team' , 'HomeController@team')->name('team');
    // our project page
    Route::get('projects' , 'HomeController@poject')->name('project_page');

    // companies page
    Route::group([] , function() {
        Route::get('aldares' , 'CompaniesController@aldares')->name('aldares');
        Route::get('najat' , 'CompaniesController@najat')->name('najat');
        Route::get('tatweer' , 'CompaniesController@tatweer')->name('tatweer');
        Route::get('qyas' , 'CompaniesController@qyas')->name('qyas');
        Route::get('caterer' , 'CompaniesController@caterer')->name('caterer');
    });

    // investor page
    Route::group([] , function() {
        Route::get('gather_in' , 'InvestorController@gatherIn')->name('gatherin');
        Route::get('nearpay' , 'InvestorController@nearPay')->name('nearpay');
    });
});
