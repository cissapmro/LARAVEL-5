<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Cart;
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    
    private $cart;
    private $produto;
    
    public function __construct(Cart $cart, Product $produto){
        
        $this->cart = $cart;
        $this->produto = $produto;
        
    }
    public function index(){
        
        $cart = $this->getCart();
     //   if(!Session::has('cart')){
        Session::set('cart', $cart);
         
       // }
       // return view('loja.cart', ['cart' => Session::get('cart')]);
         return view('loja.cart', ['cart' => $cart]);
        
    }
    public function add($id){
        
       // if(Session()->has('cart')){
         //   $cart = Session()->get('cart');
        //} else {
          //  $cart = $this->cart;
       // }
        $cart = $this->getCart();
        
    $produto =  $this->produto->find($id);
   // dd($produto);
    $cart->add($id, $produto->name, $produto->price);
    //dd($cart);
    
    Session()->set('cart', $cart);
    
    return redirect()->route('cart');
}
 public function delete($id){
     
     $cart = $this->getCart();
     $cart->remove($id);
     Session()->set('cart', $cart);
     
     return redirect()->route('cart');
 }
 public function alterar($id, Requests\CartRequest $request){
     
     $cart = $this->getCart(); //pega dos dados da sessão
   // dd($cart);
     $input = $request->all();
    // dd($input);
     $produto = $this->produto->find($id);
   // dd($produto);
     $cart->alterar($id, $produto->name, $produto->price, $input['qtd']);
     
   
     Session()->set('cart', $cart);
     
     return redirect()->route('cart');
 }
 
 //SESSION//

 private function getCart(){
        
         if(Session::has('cart')){
             $cart  = Session()->get('cart');
   
         } else {
             $cart = $this->cart;
            
        }
              return $cart;
           
    }
    
    
}
