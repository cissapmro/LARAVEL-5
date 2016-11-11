<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;


class LojaController extends Controller
{
    
    private $produto;
    private $categoria;
    
    function __construct(Product $product, Category $category){
        
       $this->produto = $product;
       $this->categoria = $category;        
    }
    
    public function index(){
        
      //  $destaque = $product->lists('name');
      //  dd($destaque);
       // $produtoDestaque = $product->where('featured','=',false)->get();
       $produtoDestaque = $this->produto->featured()->get();
      // print $produtoDestaque;
       $produtoRecommend = $this->produto->recommend()->get(); 
      //  $categories = Category::all();
        $categories = $this->categoria->all();
       // $categories = $category->lists('name');
       // dd($categories);  
        return view('loja.index', compact('categories', 'produtoDestaque','produtoRecommend'));
      
    }
    // menu esquerdo - categorias
    public function categoria($id){//variável $id vem da rota
        $categories = $this->categoria->all();
      //  dd($categorias);
          $categoria = $this->categoria->find($id);
       // dd($categoria);
          $produto = $this->produto->categoryId($id)->get(); //scopeCategoriaId
       // dd($produto); //mostra todos os valores do campo category_id//
        return view('loja.categoria', compact('categories','categoria','produto'));
    }
    // conteúdo 
   // public function produto($id){
     //   $produto = $this->produto->find($id);
       // $categories = $this->categoria->all();
       // dd($categories);
        
       // return view('loja.produto', compact('produto'));
    //}
}
