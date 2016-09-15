<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
//Route::get('blog/{nome}', 'BlogController@index');

//FORÇAR PARA QUE O PARÂMETRO ID SEJA NUMÉRICO//
//Route::pattern('id', '[0-9]+');

//ROTAS AGRUPADAS//
Route::group(['prefix'=>'admin'], function() {
Route::get('categories', ['as'=>'admin.categoria.index', 'uses'=> 'AdminCategoriesController@index']);
Route::get('products', ['as'=>'admin.produto.index', 'uses'=>'AdminProductsController@index']);
});




