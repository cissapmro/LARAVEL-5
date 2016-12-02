<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable  = [
        'product_id',
        'price',
        'qtd'
    ];
    //Forçar o nome da tabela no banco
    protected $table = 'order_items';
    
    //Um item tem uma ordem
    public function order(){
        return $this->belongsTo('CodeCommerce\Order');
    }
}
