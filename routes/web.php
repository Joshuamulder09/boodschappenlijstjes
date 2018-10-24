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
Auth::routes();

Route::get('/', 'HomeController@index');



//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin', 'AdminController@index');

    Route::resource('admin/users', 'AdminUsersController', ['names' => [
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'edit' => 'admin.users.edit',
    ]]);


    Route::resource('admin/cms', 'CmsController', ['names' => [
        'index' => 'admin.cms.index',
        'create' => 'admin.cms.create',
        'store' => 'admin.cms.store',
        'edit' => 'admin.cms.edit',
    ]]);

    Route::resource('admin/products', 'AdminProductsController', ['names' => [
        'index' => 'admin.products.index',
        'create' => 'admin.products.create',
        'store' => 'admin.products.store',
        'edit' => 'admin.products.edit',
    ]]);  //crud);  //crud

});