
@extends('template')
@section('content')

<div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Categorias
                </h4>
            </div>
        </div>
            <div class="table-responsive">
                
                <table class="table table-striped table-hover table-condensed">
                    <thead >
                    <tr>
                        <th >Id</th>
                        <th >Nome</th>
                        <th >Descrição</th>
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->name }}</td>
                            <td>{{ $categoria->description }}</td>
                            <td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
  
