
@extends('template')
@section('content')

<div class="painel">
    <div class="panel-header">     
             <!-- <a id="add" href="{{ route('admin.produto.createProduto') }}" <button class="btn btn-info" type="submit" name="visualizar">Adicionar Produto</button></a><br />-->
                    
                        <button class="btn btn-info" data-toggle="modal" data-target="#modal-create">Adicionar Produto</button><br />
            
                        
                        
                        <div class="pull-right">  
               <!-- <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-file-excel-o fa-lg"></i> Exportar</button>
                <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-print fa-lg"></i> Imprimir</button>-->
            </div>
    </div>    
       <!-- <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Produtos
                </h4>
            </div>
        </div>-->
    <br />
    <div class="panel-body">    
        <div class="container-fluid">
        <div class="table-responsive">  
           
                <table id="table-list" class="table table-striped table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Destaque</th>
                        <th>Recomendar</th>
                      
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                       
                       @foreach($produtos as $produto)
                       
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->name }}</td>
                            <td>{{ $produto->description }}</td>
                            <td>{{ $produto->price }}</td>
                            <td>{{ $produto->category->name }}</td>
                            <td>
                              @if ($produto->featured==0)
                              Mais vendidos
                              @else
                              Em promoção
                              @endif
                       
                            </td>
                            <td>
                              @if ($produto->recommend==0)
                              Sim
                              @else
                              Não
                              @endif
                            </td>
                           <td>
                           <!-- <a href="#"><span class="btn btn-info"><i class="fa fa-pencil fa-lg fa-icon-color" ></i></span></a>-->
                            
                                   <!--  <a id="btnEditar" href="{{ route('admin.produto.editarProduto',['id'=>$produto->id]) }}"> <span class="btn btn-info"><i class="fa fa-pencil" ></i> Editar</span></a>-->
                             
                               <a id="btnEditar" href="javascript:void(0)" data-id="{{$produto->id}}"> <span class="btn btn-info"><i class="fa fa-pencil" ></i> Editar</span></a>
                            
                              <a href="{{route('admin.produto.imagem', ['id'=>$produto->id])}}"> <span class="btn btn-info"><i class="fa fa-pencil" ></i> Imagem</span></a>
  
                                   <!--  <a href="{{ route('admin.produto.deletarProduto',['id'=>$produto->id]) }}"><span class="btn btn-info"><i class="fa fa-trash" ></i> Deletar</span></a>-->
                           
                                <a id="btnDeletar" href="javascript:void(0)" data-id="{{$produto->id}}"><span class="btn btn-info"><i class="fa fa-trash" ></i> Deletar</span></a>
                           
                            
     
                                  </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
        </div>
                <hr>
                         
                <div class="pull-right">
            
              {!!  $produtos->render() !!}
                </div>
        </div>
    </div>
</div>

     @endsection
    @section("post-html")
    
        @include("admin.produto.edite")
        @include("admin.produto.create")
        @include("admin.produto.delete")
        
    @endsection
    
    @section("post-scripts")
    <script type="text/javascript">
        $('#table-list a#btnEditar').click(function(){
            var idRegistro = $(this).data('id');
            
            $.get('/admin/products/' + idRegistro, function(produto){
                $('#id').val(produto.id);
                $('#category').val(produto->category->id);
                $('#name').val(produto.name);
                $('#price').val(produto.price);
                $('#description').val(produto.description);
                $('#featured').val(produto.featured);
                $('#recommend').val(produto.recommend);
                $('#tags').val(produto.tags);
                
            });
            
            $('#modal-edit').modal('show');
        });
        $('#table-list a#btnDeletar').click(function(){
            var idRegistro = $(this).data('id');
            
            $.get('admin/products/' + idRegistro, function(produto){
               
               var btnExcluir = document.getElementById('btnExcluir');
               btnExcluir.setAttribute("href", "admin/products/deletarProduto/"+idRegistro);
               $('#nome').html(produto.name);
               $('#descrição').html(produto.description);
                
            });
            
            $('#modal-delete').modal('show');
        });
        
    </script>
    @endsection
   
 