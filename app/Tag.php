<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
        
    ];
    
    public function products() {
     
    //Um produto pode ter muitas tags e uma tag tem muitos produtos: N para N.
     //Então podemos dizer que um produto pode pertencer à uma tag, mas também pode ter várias tags:
    
    return $this->belongsToMany('CodeCommerce\Product');
    
    }
}
