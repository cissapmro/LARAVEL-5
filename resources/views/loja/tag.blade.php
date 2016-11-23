@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('content')
<div class="col-sm-9 padding-right">
    <div class="product-details">
        <p class="text-info">Produtos da {{ $tag->name }}</p>
       <div class="col-sm-7">
                <div class="product-information">
                    
                    @include('loja.include._produto', ['produto' => $tag->produto])
                     
                </div>
         
       </div>
    </div>
    <!--/product-details-->
</div>
@stop