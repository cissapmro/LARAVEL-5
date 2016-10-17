<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        
        'product_id',
        'extension'
    ];
    //Cada imagem pertence à um produto: 1 para 1
    public function product() {
        
        return $this->belongsTo('CodeCommerce\Product');
    }
}
