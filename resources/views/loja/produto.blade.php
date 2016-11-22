@extends('loja.template')

@section('_categoria')
    @include('loja.include._categoria')
@stop

@section('content')
<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
               @if(count($produto->images))
                        <img src="{{ url('uploads/'.$produto->images->first()->id.'.'.$produto->images->first()->extension) }}" alt="" width="200px"/>
                       
                    @else
                        <img src="{{ url('images/no-img.jpg') }}" alt="" width="200"/>
                    @endif 
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        @foreach($produto->images as $images)
                        <a href="#"<img src="{{ url('uploads/'.$images->id.'.'.$images->extension) }}" alt="" width="80"></a>
                        @endforeach 
                    </div>

                </div>

            </div>

        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->

                <h2>{{ $produto->category->name }} :: {{ $produto->name }}</h2>

                <p>{{ $produto->description }}</p>
                                <span>
                                    <!--<span>R$ {{ number_format($produto->price,2,",",".") }}</span>-->
                                     <span>R$ {{ money_format('%.2n', $produto->price) }}</span>
                                        <a href="#" 
                                           class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Adicionar no Carrinho
                                        </a>
                                </span>
            </div>
            <!--/product-information-->
            <b><span class="text-info">Tags:</span></b>
        </div>
       <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                   <!-- {{ $produto->tags }}-->
                   Tags:
                    @foreach($produto->tags as $tag)
                   
                    <p class='text-info'<a href="{{ route('loja.tag', $tag->id) }}" class="">{{ $produto->tags }}</a></p>
                    @endforeach
                </div>
         
       </div>
    </div>
    <!--/product-details-->
</div>
@stop