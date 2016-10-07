
@extends('template')
@section('content')

<div class="painel">
    <div class="panel-header">     
        
      
              <a id="add" href="{{ route('admin.produto.createImagem', ['id'=>$produto->id]) }}" <button class="btn btn-info" type="submit" name="visualizar">Adicionar Imagem</button></a><br />
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
    <!--  {{ print_r($errors)}}-->
     
    <div class="panel-body">     
        <div class="table-responsive">  
                
                <table class="table table-striped table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Extension</th>
                                             
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($produto->images as $image)
                     
                        <tr>
                            <td>{{ $image->id }}</td>
                              <td><img src="{{ url('uploads/'.$image->id.'.'.$image->extension)}}" width="80"</td>
                            <td>{{ $image->extension }}</td>
                                                       
                           <td>
                           <!-- <a href="#"><span class="btn btn-info"><i class="fa fa-pencil fa-lg fa-icon-color" ></i></span></a>-->
                            
              
                             
                     
                             
                             
  
                               <a href="{{ route('admin.produto.deletarImagem', ['id'=>$image->id])}}"><span class="btn btn-info"><i class="fa fa-trash" ></i> Deletar</span></a>
                           
                            
     
                                  </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
             <hr>
                <a href="{{route('admin.produto.index')}}"><span class="btn btn-primary pull-right"><i class="fa fa-reply" ></i> Voltar</span></a>
               
                <div class="pull-right">
            
          
                </div>
        </div>
    </div>
</div>
    @endsection
   
   
 