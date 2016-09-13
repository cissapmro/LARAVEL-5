<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $categorias = $this->categoria->All();
        return view('admin.categoria.index', compact('categorias'));
    }
}
