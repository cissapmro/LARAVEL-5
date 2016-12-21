
@extends('template')
@section('content')

<div class="painel">
    <div class="panel-header">     
             <!--<a id="add" href="#" <button class="btn btn-info" type="submit" name="visualizar">Adicionar Ordem</button></a><br />  -->                 
                        <!--<button class="btn btn-info" data-toggle="modal" data-target="#modal-create">Adicionar Ordem</button><br />-->                     
                        <div class="pull-right">  
               <!-- <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-file-excel-o fa-lg"></i> Exportar</button>
                <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-print fa-lg"></i> Imprimir</button>-->
            </div>
    </div>    
       <!-- <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Ordem
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
                        <th>Itens</th>
                        <th>Valor</th>
                        <th>Status</th>
                                             
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                       
                       @foreach($orders as $order)
                       
                        <tr>
                            <td>{{ $order->id }}</td>
                            @foreach($order->items as $item)
                            <td>{{ $item->product->name}}</td>
                            @endforeach
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->nomeStatus }}</td>
                            
                           <td>
                           <!-- <a href="#"><span class="btn btn-info"><i class="fa fa-pencil fa-lg fa-icon-color" ></i></span></a>-->
                            
                                  <a id="btnEditar" href="{{ route('admin.orders.editarStatus', ['id'=>$order->id])}}"> <span class="btn btn-info"><i class="fa fa-pencil" ></i>Alterar Status</span></a>
  
                                  <!-- <a href="#"><span class="btn btn-info"><i class="fa fa-trash" ></i> Deletar</span></a>-->
                           
                            
     
                                  </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
             {!! $orders->render() !!}
        </div>
                <hr>
                         
                <div class="pull-right">
            
              
                </div>
        </div>
    </div>
</div>

     @endsection
  
   
 