<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Order;

class OrdersController extends Controller
{
    private $order;
    
    public function __construct(Order $order){
        
        $this->order = $order;
    }
    public function index(){
        
        $orders = $this->order->paginate(10);
       //  dd($orders);
        return view('admin.orders.index', compact('orders'));
       
    }
    public function editar($id){
        
        $status = array(
                            0 => "Pagamento Pendente",
                            1 => "Pagamento Realizado",
                           );
        
        $order = $this->order->find($id);
       // dd($order);
        return view('admin.orders.edite', compact('order', 'status'));
    }
    public function update(Request $request, $id){
        
        $input = $request->all();
        // dd($input);
        $order = $this->order->find($id);
        $order->update($input);
       
        return redirect()->route('admin.orders.index');
        
    }
}
