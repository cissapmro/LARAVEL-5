<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;
    protected $dates = [
        'deleted_at'
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
    //Regra de negócio - campo featured
    public function scopeFeatured($query){
        return $query->where('featured','=',true);
    }
    public function scopeRecommend($query){
        return $query->where('recommend','=',true);
    }
    public function scopeOfCategory($query, $id){
        return $query->where('category_id', '=', $id);
    }
  
}
