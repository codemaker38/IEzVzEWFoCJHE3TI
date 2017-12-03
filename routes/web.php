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

/**
 * Site Routes
 */
Route::get('/', 'Site\PageController@index')->name('home');
Route::get('/dashboard', 'Site\DashboardController@index')->name('dashboard');
Route::get('/project/award', 'Site\ProjectController@award')->name('award-project');
Route::get('/project/bidList', 'Site\ProjectController@bidList')->name('bid-list');
Route::get('/project/create', 'Site\ProjectController@create')->name('create-project')->middleware('auth.customer');
Route::get('/project/providerInfo', 'Site\ProjectController@providerInfo')->name('provider-info');
Route::get('/provider/dashboard', 'Site\ProviderController@index')->name('provider-dashboard');
Route::get('/transaction/history', 'Site\TransactionController@history')->name('transaction-history');

/**
 * Auth Routes
 */
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
