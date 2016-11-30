@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('content')
<div class="col-sm-9 padding-right">
    <div class="product-details">
        <ul class="breadcrumb">
                    <li><a href="#">Você está aqui:</a></li>
                     
                     <li><a href="#">Produtos da Tag: {{  $tag->name }}</a></li>
  
                </ul> 
       <div class="col-sm-10">
                <div class="product-information">
                    
                    @include('loja.include._produto', ['produto' => $tag->products])
                     
                </div>
        
       </div>
    </div>
    <!--/product-details-->
</div>
@stop