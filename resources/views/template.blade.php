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
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css">
<!-- CSS------------------------------------------------->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
<!-- FONTES------------------------------------------- -->
     <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
<!-- ICON--------------------------------------------- -->
    <link rel="shortcut icon" href="{{ asset('/img/cissa.JPG') }}" type="image/jpg" />
  </head>
  <body>  
    <div class="container-fluid">
    <!--HEADER - TOPO
    ------------------------------------------- -->
    <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">CodeCommerce</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="navbar-brand" rel="home" href="#" title="logo da Cissa">  <img style="margin-top: -15px; width: 50px; height: 50px;" src="{{ asset('/img/cissa.JPG') }}" class="img-circle pull-left" alt="foto do usuario" />  CodeCommerce</a>  
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('admin.categoria.index')}}">Categoria</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('admin.produto.index')}}">Produto</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sair</a></li>
                <li><a href="#">Alterar Senha</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    </header>
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
  <script src="{{ asset('/js/jquery.js') }}"></script>
<!-- BOOTSTRAP - JSCRIPT--------------------------------->
    <!--<script src="../js/bootstrap.min.js"></script>-->
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  
  
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
   

