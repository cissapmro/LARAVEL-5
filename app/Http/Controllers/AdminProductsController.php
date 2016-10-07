<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\ProductImage;


use Illuminate\Http\Request; //request sem validação
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
   
    public function images($id){
        
        $produto = $this->produto->find($id);
        return view('admin.produto.imagem', compact('produto'));
    }
    public function createImage($id){
        
        $produto = $this->produto->find($id);
        return view('admin.produto.create_imagem', compact('produto'));
    }
    public function salvarImagem(Requests\ProductImageRequest $request, $id, ProductImage $productImagem){
        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        //Cria a imagem no banco
        $imagem = $productImagem::create(['product_id'=>$id, 'extension'=>$extension]);
        //Grava a imagem no disco local
       // Storage::disk('s3')->put($imagem->id.'.'.$extension, File::get($file));
        Storage::disk('public_local')->put($imagem->id.'.'.$extension, File::get($file));
        return redirect()->route('admin.produto.imagem',['id'=>$id]);
        
    }
    public function deletarImagem(ProductImage $productImage, $id){
        
        $image = $productImage->find($id);
      
        Storage::disk('public_local')->delete($image->id.'.'.$image->extension);
        
        //Método product
        $image->delete();
        $produto = $image->product;
       
        return redirect()->route('admin.produto.imagem',['id'=>$produto->id]);
    
        
    }
    
    
}
