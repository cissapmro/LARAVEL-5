@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('_content')
   
 <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Em destaque</h2>
           
            @include('loja.include._produto',['produto'=> $produtoDestaque])
            <!--?php print($produtoDestaque) ?-->
         </div><!--features_items-->

        <div class="features_items"><!--recommended-->
            <h2 class="title text-center">Recomendados</h2>
            
            @include('loja.include._produto',['produto'=> $produtoRecommend])
        </div>    
        </div><!--recommended-->
@stop