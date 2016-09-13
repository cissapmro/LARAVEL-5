<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;


class BlogController extends Controller
{
  
    public function index($nome){
        //return "oi";
        return view('blog.index', ['nome'=>$nome]);
    }
    
}
