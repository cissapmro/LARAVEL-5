<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    protected $fillable = [
        
        'product_id',
        'extension'
    ];
    use SoftDeletes;
    protected $dates = [
        'deleted_at'
    ];
    //Cada imagem pertence à um produto: 1 para 1
    public function product() {
        
        return $this->belongsTo('CodeCommerce\Product');
    }
}
