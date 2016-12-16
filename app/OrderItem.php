<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //Forçar o nome da tabela no banco
    protected $table = 'order_items';
    
    protected $fillable  = [
        'product_id',
        'price',
        'qtd'
    ];
    
    
    //Um item tem uma ordem
    public function order(){
        return $this->belongsTo('CodeCommerce\Order');
    }
    public function product(){
        return $this->belongsTo('CodeCommerce\Product');
    }
    
}
