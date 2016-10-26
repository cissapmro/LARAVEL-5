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
    
    //Um produto tem várias imagens: 1 para N
    public function images() {
        
        return $this->hasMany('CodeCommerce\ProductImage');
        
    }
    public function category(){
        
        //Um produto tem somente uma categoria: 1 para 1   
        return $this->belongsTo('CodeCommerce\Category'); //pertence para
        
    }
     //Um produto pode ter muitas tags e uma tag tem muitos produtos: N para N.
     //Então podemos dizer que um produto pode pertencer à uma tag, mas também pode ter várias tags:

    public function tags() {
        return $this->belongsToMany('CodeCommerce\Tag');
        
    }
    public function getNameDescriptionAttribute()
    {
        return $this->name." - ".$this->description;
    }
    //Lista os atributos da tag
    public function getTagListAttribute(){
        
        $tags = $this->tags->lists('name')->toArray(); 
       // return $tags;
        return implode(", ", $tags); 
       
    }
  
}
