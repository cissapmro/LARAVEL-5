
@extends('template')
@section('content')

<div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Produtos
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
                        <th >Price</th>
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
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
  

