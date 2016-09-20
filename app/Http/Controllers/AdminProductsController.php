<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;

class AdminProductsController extends Controller
{
    private $produto;
    
    public function __construct(Product $products){
        $this->produto = $products;
    }
    public function index(){
        $produtos = $this->produto->all();
        return view('admin.produto.index', compact('produtos'));
    }
}
