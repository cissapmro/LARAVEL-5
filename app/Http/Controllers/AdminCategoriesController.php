<?php

namespace CodeCommerce\Http\Controllers;

//use Illuminate\Http\Request; //não é usado, substiuido por use CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
    private $categoria;
    
    public function __construct(Category $category){
        $this->categoria = $category;
    }
            
    public function index(){
        
       // $categorias = $this->categoria->all();
         $categorias = $this->categoria->paginate(5);
         
        return view('admin.categoria.index', compact('categorias'));
    }
    public function create(){
        return view('admin.categoria.create');
    }
    //GRAVAR DADOS NO BANCO//
   // public function store(Request $request){
        public function salvar(Requests\CategoryRequest $request){ //usando a request customizada para validar os campos
        $input = $request->all();
        $categoria = $this->categoria->fill($input);
        $categoria->save();
        return redirect()->route('admin.categoria.index');
    }
    //DELETAR DADOS
    public function deletar($id){
        $this->categoria->find($id)->delete();
        return redirect()->route('admin.categoria.index');
    }
    public function editar($id) {
        $categoria = $this->categoria->find($id);
        return view('admin.categoria.edite', compact('categoria')); 
    }
    public function update(Requests\CategoryRequest $request, $id){
        $this->categoria->find($id)->update($request->all());
        return redirect()->route('admin.categoria.index');
    }
}
