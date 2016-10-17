<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    
    public function products(){
    //Uma categoria tem vários produtos: 1 para N

        return $this->hasMany('CodeCommerce\Product'); //tem muitos
        
    }
    
}
