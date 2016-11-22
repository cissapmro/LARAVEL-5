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
/*********LOJA**************/
Route::group(['prefix' => ''], function() {
    Route::get('/', ['as' => 'loja.index', 'uses' => 'LojaController@index']);
    Route::get('categoria/{id}', ['as' => 'loja.categoria', 'uses' => 'LojaController@categoria']);
    Route::get('produto/{id}', ['as' => 'loja.produto', 'uses' => 'LojaController@produto']);
    Route::get('tag/{id}', ['as' => 'loja.tag', 'uses' => 'LojaController@tag']);
    
});
/****************************/
//Route::get('/', 'LojaController@index');

//Route::get('home', 'HomeController@index');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Route::get('blog/{nome}', 'BlogController@index');

//FORÇAR PARA QUE O PARÂMETRO ID SEJA NUMÉRICO//
//Route::pattern('id', '[0-9]+');

//ROTAS AGRUPADAS - ADMIN//
Route::group(['prefix'=>'admin', 'where'=> ['id'=> '[0-9]+']], function() {
//Categoria 
Route::group(['prefix'=>'categories'], function() {

    Route::get('', ['as'=>'admin.categoria.index', 'uses'=> 'AdminCategoriesController@index']); //crud categoria
    Route::post('', ['as'=>'admin.categoria.salvar', 'uses'=>'AdminCategoriesController@salvar']); //gravar no banco
    Route::get('create', ['as'=>'admin.categoria.create', 'uses'=>'AdminCategoriesController@create']); //formulário create
    Route::get('deletar/{id}', ['as'=>'admin.categoria.deletar', 'uses'=>'AdminCategoriesController@deletar']); //deletar no banco
    Route::get('editar/{id}', ['as'=>'admin.categoria.editar', 'uses'=>'AdminCategoriesController@editar']); //deletar no banco
    Route::post('update/{id}', ['as'=>'admin.categoria.update', 'uses'=>'AdminCategoriesController@update']); //alterar no banco
    Route::post('tag/{id}', ['as'=>'admin.tag.salvarTag', 'uses'=>'AdminCategoriesController@salvarTag']);
});
//Produto
Route::group(['prefix'=>'products'], function() {   

    Route::get('', ['as'=>'admin.produto.index', 'uses'=>'AdminProductsController@index']);//crud produto
    Route::post('', ['as'=>'admin.produto.salvarProduto', 'uses'=>'AdminProductsController@salvar']); //gravar no banco
    Route::get('createProduto', ['as'=>'admin.produto.createProduto', 'uses'=>'AdminProductsController@create']); //ALTERADO 
    Route::get('deletarProduto/{id}', ['as'=>'admin.produto.deletarProduto', 'uses'=>'AdminProductsController@deletar']); //deletar no banco
    Route::get('editarProduto/{id}', ['as'=>'admin.produto.editarProduto', 'uses'=>'AdminProductsController@editar']); //deletar no banco
    Route::post('updateProduto/{id}', ['as'=>'admin.produto.updateProduto', 'uses'=>'AdminProductsController@update']); //alterar no banco
    //Imagem
    Route::group(['prefix'=>'images'], function(){
 
    Route::get('product/{id}', ['as'=>'admin.produto.imagem', 'uses'=>'AdminProductsController@images']); 
    Route::get('createImagem/{id}', ['as'=>'admin.produto.createImagem', 'uses'=>'AdminProductsController@createImage']); 
    Route::post('salvarImagem/{id}', ['as'=>'admin.produto.salvarImagem', 'uses'=>'AdminProductsController@salvarImagem']); 
    Route::get('deletarImagem/{id}', ['as'=>'admin.produto.deletarImagem', 'uses'=>'AdminProductsController@deletarImagem']);
});

});

});