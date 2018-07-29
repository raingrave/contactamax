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
    return redirect('login');
});

Auth::routes();

Route::group([
    'prefix' => 'dashboard',
    'namespace' => 'Dashboard',
    'middleware' => 'auth',
], function () {
    Route::get(null, 'DashboardController@index')->name('dashboard.index');

    Route::group([
        'prefix' => 'produto',
        'namespace' => 'Product',
    ], function () {
        Route::get('listagem', 'ProductController@index')->name('dashboard.product.index');
        Route::get('novo', 'ProductController@create')->name('dashboard.product.create');
        Route::post('novo', 'ProductController@store')->name('dashboard.product.store');
    });
});
