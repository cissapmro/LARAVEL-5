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

//Route::group(['prefix'=>'produtos'], function(){
  //  Route::get('index',['as'=>'produtos.index','uses'=>'ProdutosController@index']);    
//});

Route::get('index', 'ProdutosController@index');


Route::get('/', function () {
    return view('welcome');
});
Route::get('blog/{nome}', 'BlogController@index');

//as = route independente da url
Route::get('categories',['as'=>'categories','uses'=>'CategoriesController@index']);

Route::post('categories',['as'=>'categories.store','uses'=>'CategoriesController@store']); //incluir dados
Route::get('categories/create',['as'=>'categories.create','uses'=>'CategoriesController@create']);
Route::get('categories/{id}/destroy',['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
Route::get('categories/{id}/edit',['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
Route::put('categories/{id}/update',['as'=>'categories.update','uses'=>'CategoriesController@update']);

//AGRUPAR ROTAS
//
//Route::group(['prefix'=>'admin'], function() {
      //     Route::group(['namespace'=>'admin'], function()
//     Route::group([middleware'=>'admin|exemplo'], function()

 //   Route::get('produtos', function(){
   //      return "exemplo";
  //  });
   
//});
    
//Route:get('category/{id}', function($id) {
  // $category = new CodeCommerce\Category();
  // $c = $category->find($id);
   //return $c->name;
    
//});   
//INJETANDO MODEL 
//Route:get('category/{category}', function(CodeCommerce\Category $category) {
  // return $category->name;
  //  dd($category);
//});   



//Route::get('exemplo', 'BlogController@exemplo');

//USADO PARA GET E POST
//Route::math([‘get’,’post’], ‘/exemplo2’, function(){
	//return “oi”;
//});
//************************************
//// QUALQUER TIPO DE HTTP (get, post, delete, put...
//Route::any(‘/exemplo2’), function(){ 
	//return “oi”;
//}
/************************************
//PASSANDO PARÂMETROS NA ROTA
//
//PASSAR ID//
 * 
 */
Route::get('exemplo/{id}', function($id){
   return "oiii $id";
   
});
/************************************
 * //FORÇAR PADRÃO**/
//Route::pattern("id", "[0-9]+");
//Route::get('exemplo/{id?}', function($id = 123){ 
 
 //   if($id)
  //    return "$id";
   //   return "não tem id"; 
    //}); 
    
/*****ROTA DINÂMICA***/
  //  Route::get("alterado", ['as'=> 'exemplo', function(){
        
   //     Route::get("exemplo", ['as'=> 'exemplo', function(){
     //   echo Route::currentRouteName(); //rota atual
       // return "exemplo";
   // }]);
    
   // redirect()->route('exemplo');
  //  echo route('blog');die;

    
//SE TIVER ID OU NÃO
//Route::get('exemplo/{id?}', function($id = null){ //se tiver id ou não
 
  //  if($id)
    //    return "$id";
    //    return "não tem id";
   // });
 // Route::get(‘user/{id}, function(){
//	return “oi  $id”;
//} 
//************************************
//CASO NÃO TEM ID VAI PASSAR CISSA
//Route::get('exemplo/{id?}', function($id = "cissa"){ 
 
   // if($id)
    //  return "$id";
    //  return "não tem id";
  // });
//************************************
 //ID SOMENTE COM NÚMEROS OU LETRAS**/

//Route::get('exemplo/{id?}', function($id = 123){ 
 
  //  if($id)
   //   return "$id";
   //   return "não tem id";
  // })->where("id", "[0-9]+"); 
    //})->where("id", "[A-Za-z]+"); 





