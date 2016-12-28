<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use CodeCommerce\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use CodeCommerce\Events\CheckoutEvent;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;

class CheckoutController extends Controller
{
    private $orderModel;
    private $orderItem; 
    private $categoria;
    private $checkoutService;
    
    public function __construct(Order $orderModel, OrderItem $orderItem, Category $category, CheckoutService $checkoutService){
       // $this->middleware('auth');
        $this->orderModel = $orderModel;
        $this->orderItem = $orderItem;
        $this->categoria = $category;
        $this->checkoutService = $checkoutService;
    }
    public function place(){
        if(!Session()->has('cart')){
            return false;
        }
    $cart = Session()->get('cart');
    //dd($cart);
    if($cart->getTotal() > 0) {
        //Passa os dados do pedido para o banco - obs. criar a fillable na model
        //PGSEGURO//
        $checkout = $this->checkoutService->createCheckoutBuilder();
        $order = $this->orderModel->create(['user_id'=>Auth::user()->id, 'total'=>$cart->getTotal()]);
        //percorre todos os itens do carrinho
        foreach($cart->all() as $k=>$item){
            //PGSEGURO//
            $checkout->addItem(new Item($k, $item['name'], number_format($item['price'],2,".",""), $item['qtd']));
           
            $order->items()->create(['product_id'=>$k, 'price'=>$item['price'], 'qtd'=>$item['qtd']]);
        }
        //limpar o carrinho
      $cart->clear();
      
       //E-MAIL//
      event(new CheckoutEvent(Auth::user(), $order));
      
       //PGSEGURO//
      $response = $this->checkoutService->checkout($checkout->getCheckout());
      return redirect($response->getRedirectionUrl());
      
      $categories = $this->categoria->all();
      return view('loja.checkout', compact('order', 'categories'));
    }
        $categories = $this->categoria->all();
     
     return view('loja.checkout', ['cart'=>'empty', 'categories'=>$categories]);
    }
    
    
    public function test(CheckoutService $checkoutService){
        $checkout = $checkoutService->createCheckoutBuilder()
            ->addItem(new Item(1, 'Televisão LED 500', 8999.99))
            ->addItem(new Item(2, 'Video-game mega ultra blaster', 799.99))
            ->getCheckout();

        $response = $checkoutService->checkout($checkout);

        return redirect($response->getRedirectionUrl());
    }
}
