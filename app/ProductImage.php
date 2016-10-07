<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        
        'product_id',
        'extension'
    ];
    //Relacionamento - 1 para 1 - 1 imagem pertence a 1 produto
    public function product() {
        
        return $this->belongsTo('CodeCommerce\Product');
    }
}
