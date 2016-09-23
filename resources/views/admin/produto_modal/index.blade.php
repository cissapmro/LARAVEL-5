
@extends('template')
@section('content')

<div class="painel">
    <div class="panel-header">     
               <button type="submit" class="btn fa-btn-color" data-toggle="modal" data-target="#modal"><i class="fa fa-folder-open fa-lg"></i> Adicionar Produto</button>
            <div class="pull-right">  
                <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-file-excel-o fa-lg"></i> Exportar</button>
                <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-print fa-lg"></i> Imprimir</button>
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
        <div class="table-responsive">  
                
                <table class="table table-striped table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Price</th>
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
                             <a href="#" data-toggle="modal" data-target="#edite" data-id="{{ $produto->id }}"><i class="fa fa-pencil fa-lg fa-icon-color" ></i></a>
                                     
                             
                             
                             
                             <a href=#" data-toggle="modal" data-target="#confirmDelete"><i class="fa fa-trash fa-lg fa-icon-color"></i></a>
     
                                  </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="pull-right">
            
              {!!  $produtos->render() !!}
                </div>
        </div>
    </div>
</div>
    @endsection
    @include('admin.produto.create')
    @include('admin.produto.delete')
    @include('admin.produto.edite')
   
 