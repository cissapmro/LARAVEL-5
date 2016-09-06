

@extends('template');
@section('content')
<div class="container">
<div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Categorias
                </h4>
            </div>
        </div>
    <div class="panel-heading">
       <button type="button" class="btn btn-info" id="add">Adicionar Categorias</button>      
    </div>  
    <div class="panel-body">
    
            <table class="table responsive">
                <caption>Categorias</caption>
                <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
               
                <th>Ações</th>
                </thead>
                <tbody>
                  @foreach($categorias as $categoria)
                  <tr>
                        <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->name }}</td>
                            <td>{{ $categoria->description }}</td>
                            
                        <td>
                             <a href="{{ route('categories.edit',['id'=>$categoria->id]) }}"><button class="btn btn-info" type="submit" name="editar"><i class="fa fa-pencil" ></i></button></a>
                             <a href="{{ route('categories.destroy',['id'=>$categoria->id]) }}"><button class="btn btn-danger" type="submit" name="excluir"><i class="fa fa-list" ></i></button></a>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
            </table>
            </div>
        </div>
    @endsection


