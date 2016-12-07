<php
<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- META TAGS
------------------------------------------- -->
    <meta name="description" content="Blog" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Blog da Cissa" />
    <meta name="author" content="Alcirléia de Souza Barbosa - Cissa" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>  
<!-- BOOTSTRAP - CSS------------------------------------->
<link href="{{ elixir('css/all.css') }}" rel="stylesheet">
  <!--  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css">
<!-- CSS------------------------------------------------->
  <!--  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
<!-- FONTES------------------------------------------- -->
  <!--   <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
<!-- ICON--------------------------------------------- -->
  <!--  <link rel="shortcut icon" href="{{ asset('/img/cissa.JPG') }}" type="image/jpg" />-->
  </head>
 <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}" title="Home">Home</a></li>
                <li><a href="#" title="Users">Users</a></li>
                <li><a href="{{ route('admin.categoria.index') }}" title="Categories">Categories</a></li>
                <li><a href="{{ route('admin.produto.index') }}" title="Product">Product</a></li>
                <li><a href="#" title="Ordens" >Ordens</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!--MAIN - CONTEÚDO CENTRAL
------------------------------------------- -->
<main>
    <div class="main">
       <!--sessão de conteúdo-->
            @yield('content')
    </div>
</main>  
    </div>
<!--FIM DO MAIN
------------------------------------------- -->
@yield('post-html')
<!-- JQUERY------------------------------------------- -->
    <!--<script src="../js/jquery.js"></script>-->
<script src="{{ elixir('js/all.js') }}"></script>
 <!-- <script src="{{ asset('/js/jquery.js') }}"></script>
<!-- BOOTSTRAP - JSCRIPT--------------------------------->
    <!--<script src="../js/bootstrap.min.js"></script>-->
  <!--<script src="{{ asset('/js/bootstrap.min.js') }}"></script>-->
  
  
   <script type="text/javascript">
    $('#add').on('click',function(){
        $('#create').modal('show');    
    });
   
    </script>
    @yield('post-scripts')
    
     <script type="text/javascript">
    $('#add').on('click',function(){
        $('#create').modal('show');    
    });
   
    </script>
    </body>
</html>      
   

