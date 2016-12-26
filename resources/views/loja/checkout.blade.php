
@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('content')
 <div class="col-sm-9 padding-right">
 <div class="product-details">
    @if(isset($cart) == 'empty')
    <div class="alert alert-danger">Carrinho de compras vazio!</div>
    @else
    <div class="alert alert-info">
        <p> O pedido <b>{{ $order->id }}</b> foi realizado com sucesso!</p>
        Você estará recebendo um email de confirmação.
        
    </div>
    
    @endif
</div>
 </div>
@stop

