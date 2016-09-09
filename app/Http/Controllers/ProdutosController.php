<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    public function index(){
        return view('produtos.index');
    }
}
