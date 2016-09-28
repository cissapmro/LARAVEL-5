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
    //lista todos os produtos que estão na categoria
    //UM PARA MUITOS
    //uma categoria tem muitos produtos
    //RELACIONAMENTO: 1 PARA N - categoria tem muitos produtos//

        return $this->hasMany('CodeCommerce\Product'); //tem muitos
        
    }
    
}
