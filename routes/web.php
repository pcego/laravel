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

// Rota para a página inicial sem o uso do controller

Route::get('/', function () {
    return view('welcome');
});

// Rota para /home utilizando controller
Route::get('/home', 'homeController@home');


//Rota passando parâmetros

Route::get('ola/{nome}', 'homeController@ola');


Route::get('lista', 'homeController@lista');

Route::get('posts', 'PostsController@posts');



Route::group(['prefix'=>'admin'], function(){

    Route::get('', ['as'=>'admin.admin', 'uses'=> 'PostsAdminController@admin']);

    Route::get('create', ['as'=>'admin.create', 'uses'=> 'PostsAdminController@create']);

    Route::post('store', ['as'=>'admin.store', 'uses'=> 'PostsAdminController@store']);

    Route::get('edit/{id}', ['as'=>'admin.edit', 'uses'=>'PostsAdminController@edit']);

    Route::put('update/{id}', ['as'=>'admin.update', 'uses'=>'PostsAdminController@update']);

    Route::get('delete/{id}',['as'=>'admin.delete','uses'=>'PostsAdminController@delete']);


});

