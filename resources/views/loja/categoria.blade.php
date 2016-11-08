@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
           
                <ul class="breadcrumb">
                    <li><a href="#">Você está aqui:</a></li>
                     <li><a href="#">Categorias</a></li>
                     <li><a href="#">{{  $categoria->name }}</a></li>
  
                </ul>  
            <h4 class='text-info'>Produto</h4>
            <hr>
            @if(count($produto))
                @include('loja.include._produto', ['produto' => $produto])
            @else 
            
            
            <div class='alert alert-danger'>
                <h4>Atenção!</h4>
                Esta categoria não tem produto cadastrado!
            </div>
            @endif
        </div><!--features_items-->
    </div>
@stop