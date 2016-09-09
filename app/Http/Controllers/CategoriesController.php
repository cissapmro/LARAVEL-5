<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

class CategoriesController extends Controller
{
    private $categories;
    public function __construct(Category $categories){
        
        $this->categories = $categories;
}
   
    public function index(){
        
        $categorias = $this->categories->all();
        return view('categories.index', compact('categorias'));
    }
    
    public function create(){
        
        return view('categories.create');
    }
    //MÉTODO PARA GRAVAR NO BANCO
   // public function store(Request $request){
    public function store(Requests\CategoryRequest $request){ //VALIDAÇÃO
        $input = $request->all();
        $categoria = $this->categories->fill($input);
        $categoria->save();
        return redirect()->route('categories'); //redireciona para categories - crud
    }
    //MÉTODO PARA DELETAR NO BANCO
    public function destroy($id){
        $this->categories->find($id)->delete();
        return redirect()->route('categories'); //redireciona para categories - crud
    }
    public function edit($id){
        $categoria = $this->categories->find($id);
        return view('categories.edit', compact('categoria'));     
    }
    public function update(Requests\CategoryRequest $request, $id){
        $this->categories->find($id)->update($request->all());
        return redirect()->route('categories');
    }
}
