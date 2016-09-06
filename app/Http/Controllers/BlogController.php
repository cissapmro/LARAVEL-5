<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class BlogController extends Controller
{
    private $categoria;
    
    public function __construct(Category $categoria) { //Model App/Category + variável $categoria
        
        $this->categoria = $categoria;
        
    }
    
    public function index($nome){
        //return "oi";
        return view('blog.index', ['nome'=>$nome]);
    }
    public function exemplo(){
        
        $categoria = $this->categoria->all();
        return view('blog.exemplo', compact('categoria'));
    }
}
