<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'user_id',
        'total',
        'status'
    ];
    //Uma ordem de serviço pode ter diversos items
    public function items(){
        return $this->hasMany('CodeCommerce\OrderItem'); //acessa todos os items da order
    }
    
    //uma ordem tem um usuário
    public function user(){
        return $this->belongsTo('CodeCommerce\User');
    }
}
