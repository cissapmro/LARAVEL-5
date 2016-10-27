<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function products(){
    //Uma categoria tem vários produtos: 1 para N

        return $this->hasMany('CodeCommerce\Product'); //tem muitos
        
    }
    
}
