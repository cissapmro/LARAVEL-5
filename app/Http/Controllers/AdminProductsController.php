<?php

namespace CodeCommerce\Http\Controllers;

//use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;
use CodeCommerce\Category;

class AdminProductsController extends Controller
{
    private $produto;
    
    public function __construct(Product $products){
        $this->produto = $products;
    }
    public function index(){
       // $produtos = $this->produto->all();
         $produtos = $this->produto->paginate(5);
        return view('admin.produto.index', compact('produtos'));
    }
    //método injection = não precisa instanciar
    public function create(Category $category){
        
        $categories = $category->lists('name', 'id');
        return view('admin.produto.create', compact('categories'));
    }
    //GRAVAR DADOS NO BANCO//
   // public function store(Request $request){
    public function salvar(Requests\ProductsRequest $request){ //usando a request customizada para validar os campos
        $input = $request->all();
        $produto = $this->produto->fill($input);
        $produto->save();
        return redirect()->route('admin.produto.index');
    }
    public function deletar($id){
        $this->produto->find($id)->delete();
        return redirect()->route('admin.produto.index');
    }
    public function editar($id, Category $category){
        
        $categories = $category->lists('name', 'id');
        $produto = $this->produto->find($id);
        return view('admin.produto.edite', compact('produto', 'categories'));
    }
    public function update(Requests\ProductsRequest $request, $id){
        $this->produto->find($id)->update($request->all());
         return redirect()->route('admin.produto.index');
    }
    
    
}
