@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
           
                <ul class="breadcrumb">
                     <li><a href="#">Categorias</a></li>
                     <li><a href="#">{{  $categoria->name }}</a></li>
  
                </ul>  
            <p class='text-info'>Produto</p>
        </div><!--features_items-->
    </div>
@stop