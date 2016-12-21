<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        
    }
    public function orders(){
       
       $orders = Auth::user()->orders()->paginate(10);
      //  dd($orders);
        return view('loja.orders', compact('orders'));
    }
}
