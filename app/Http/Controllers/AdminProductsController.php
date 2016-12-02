<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\Tag;
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
         
         $produtos = $this->produto->orderBy('id')->paginate(5);
         
        return view('admin.produto.index', compact('produtos'));
    }
    //método injection = não precisa instanciar
    public function create(Category $category){
        
        $categories = $category->lists('name', 'id');
        return view('admin.produto.create', compact('categories'));
    }
    //GRAVAR DADOS NO BANCO  - PRODUTO//
   // public function store(Request $request){
    public function salvar(Requests\ProductsRequest $request, Tag $tag){ //usando a request customizada para validar os campos
        $input = $request->all();
        $produto = $this->produto->fill($input);
        $produto->save();
    //GRAVAR DADOS NO BANCO  - TAG//
        //request->get('tags') -> pega o valor do campo tags.
        //Pega os dados do campo tags e transforma em array, separado por vírgula e sem espaços em branco.
      $inputTags = array_map('trim', explode(',', $request->get('tags'))); //trim - remove espaços em branco - explode - transforma em array
      
    // print_r($inputTags); //Array ( [0] => Windows 2000 
                                 //[1] => Internet )
    // die();
  //  dd($tag);
    
      // Função salvarTag
        $this->salvarTag($tag, $inputTags,$produto->id); //campo e id do produto
       
        return redirect()->route('admin.produto.index');
    }
           
    private function salvarTag(Tag $tag,$inputTags, $id){
     //   print($inputTags); 
      //  $tag = new Tag();
      //  $tag = $tag->all();
        foreach($inputTags as $value){
          //ENCONTRA O PRIMEIRO REGISTRO POR NOME     
          $registroTag = $tag->firstOrCreate(["name"=> $value]);
        // print "Resultado" .$registroTag; //Resultado{"name":"Windows 2000","updated_at":"2016-10-26 13:48:14","created_at":"2016-10-26 13:48:14","id":6}
        // die();
          //PEGA O ID DA TAG
            $idTags[]  = $registroTag->id;
           // print_r($idTags); //Array ( [0] => 6 )
          //  die();
        }
        $produto = $this->produto->find($id);
      
       // print $produto; //{"id":7,"name":"Computador","description":"Descri\u00e7\u00e3o de Computador","price":"8.00","created_at":"2016-10-22 23:08:10","updated_at":"2016-10-22 23:08:10","featured":false,"recommend":true,"category_id":1}
      // die();
        $produto->tags()->sync($idTags);
        
    }     
    public function deletar($id){
        $this->produto->find($id)->delete();
        return redirect()->route('admin.produto.index');
    }
    
    public function editar($id, Category $category){
        
        $categories = $category->lists('name', 'id');
       // dd($categories);
        $produto = $this->produto->find($id);
        
        $produto->tags = $produto->tag_list;
        
        return view('admin.produto.edite', compact('produto', 'categories'));
         
    }
    
    public function update(Requests\ProductsRequest $request, $id, Tag $tag){
        
        $this->produto->find($id)->update($request->all());
        $this->produto->find($id);
        
       $input = array_map('trim', explode(',', $request->get('tags')));
       $this->salvarTag($tag, $input,$id);

         return redirect()->route('admin.produto.index');
    }
        
    public function get($id){
        return $this->produto->find($id);
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
