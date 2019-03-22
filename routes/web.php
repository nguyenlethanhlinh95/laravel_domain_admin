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

Route::get('/', 'UserController@test');

Route::get('/login', 'UserController@loginAdmin')->name('login_get');
Route::post('/login', 'UserController@checkLoginAdmin')->name('login_post');
//Route::post('login', 'UserController@checkLoginAdmin')->name('check_login');

Route::group(['prefix'=>'admin', 'middleware' => 'adminLogin'], function() {
    Route::group(['prefix'=>'domain'], function (){
        Route::get('list','DomainNameController@index')->name('admin_domain_list');

        Route::get('create','DomainNameController@create')->name('admin_domain_create');
        Route::post('create','DomainNameController@store')->name('admin_domain_create_p');

        Route::get('edit/{id}','DomainNameController@edit')->name('admin_domain_edit');
        Route::get('edit','DomainNameController@update')->name('admin_domain_edit_p');
    });
});
