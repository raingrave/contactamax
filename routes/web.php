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
        Route::get('find/{attribute}', 'ProductController@getByAttribute');
        Route::get('novo', 'ProductController@create')->name('dashboard.product.create');
        Route::post('novo', 'ProductController@store')->name('dashboard.product.store');
        Route::get('editar/{id}', 'ProductController@edit')->name('dashboard.product.edit');
        Route::post('editar/{id}', 'ProductController@update')->name('dashboard.product.update');
        Route::post('excluir/{id}', 'ProductController@destroy')->name('dashboard.product.destroy');
    });

    Route::group([
        'prefix' => 'ordem',
        'namespace' => 'Order',
    ], function () {
        Route::get('listagem', 'InputOrderController@index')->name('dashboard.input.order.index');
        Route::get('novo', 'InputOrderController@create')->name('dashboard.input.order.create');
        Route::post('novo', 'InputOrderController@store')->name('dashboard.input.order.store');
        Route::post('excluir/{id}', 'InputOrderController@destroy')->name('dashboard.input.order.destroy');
    });
});
