@extends('loja.template')

@section('content')
<section id="cart_items">
    <div class="container">
        
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                         <td class="description">Produto</td>
                        <td class="price">Preço</td>
                        <td class="quantidade">Quantidade</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cart->all() as $k=>$item)
                    <tr>
                        <td class="cart_product">
                            <a href="{{ route('loja.produto', ['id'=> $k]) }}">
                                Imagem
                            </a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="{{ route('loja.produto', ['id'=> $k]) }}">{{ $item['name'] }}</a></h4>
                            <p>Código: {{ $k }}</p>
                        </td>
                        <td class="cart_price">
                            <h4><a href="#">{{ $item['price'] }}</a></h4>
                        </td>
                       <!-- <td class="cart_quantity">
                            <h4><a href="#">{{ $item['qtd'] }}</a></h4>
                        </td>-->
                        <td class="cart_quantity">
                            <div class="form-group">
                                <div class='col-md-3'>
                                {!! Form::open(['route' => ['cart.alterar', 'id'=> $k], 'method'=>'post']) !!}
                                {!! Form::text('qtd', $item['qtd'], ['class' => 'form-control'])  !!}
                                </div>
                            </div>
                        </td>
                         
                        <td class="cart_total">
                            <p class="cart_total_price">R$ {{ $item['price']* $item['qtd']}}</p>
                        </td>
                        <td class="cart_delete">
                            <a href="{{ route('cart.delete', ['id'=>$k]) }}" class="cart_quantity_delete">Delete</a>
                        </td>
                        <td class="cart_delete">
                             {!! Form::submit('Alterar Quantidade', ['class'=> 'btn btn-info']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="" colspan="6">
                            <span class="label label-danger">Nenhum item encontrado.</span> 
                        </td>
                    </tr>
                    
                    @endforelse
                    <tr class="cart_menu">
                        <td colspan="6">
                            <div class="col-md-6 pull-right">
                               <span>Total: R$ {{ $cart->getTotal() }}</span>
                                <a href="{{ route('checkout.place')}}" class="col-md-3 pull-right btn btn-success">Fechar a conta</a>
                            </div>
                         
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      
    </div>
</section>
@stop