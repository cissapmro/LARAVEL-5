<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'featured',
        'recommend'
    ];
    
    public function category(){
        
        //lista a categoria que está em produto
        //UM PARA UM
        //UM produto para uma categoria
        //RELACIONAMENTO: 1 PARA 1 - =     
        return $this->belongsTo('CodeCommerce\Category'); //pertence para
        
    }
}
