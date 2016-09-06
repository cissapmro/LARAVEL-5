
@extends('template')
@section('title')
    Categorias
@stop

@section('content')
 
        
    <!--TITULO-->
        <div class="page-header">
            <h4 class="text-info"><i class="fa fa-pencil fa-3x"></i>Cadastro de Categorias</h4>
        </div>
        <!--PAINEL HEADER-->        
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4>Atenção!</h4>Os campos com * são obrigatórios.
            </div>
        <!--PAINEL CORPO - FORMULÁRIO-->
        <div class="panel-body">
            <div class="row-fluid"> 
                
               <!--  {{ print_r($errors) }}-->
                 <!--VALIDAÇÃO-->
@if ($errors->any())
                  <div class="alert alert-danger">
                   @foreach($errors->all() as $error)
                   {{ $error }}<br />
                   @endforeach
                </div>
                 
                 @endif
                
                {!! Form::open(['route'=>['categories.update', $categoria->id], 'method'=>'put']) !!}
                   
                       
                  <legend>Categoria: {{ $categoria->name }}</legend>
                 
                
                  
                       <div class="form-group">
                            <div class="col-md-6">
                               <!--  <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" title="Digite o seu nome completo" placeholder="Digite o seu nome" autofocus required />-->
                               {!! Form::label('name', 'Nome:') !!} 
                               {!! Form::text('name', $categoria->name, ['class'=>'form-control']) !!}
                            </div>  
                           
                            </div>
                
                 
                       <div class="form-group">
                           <div class="col-md-6">
                               <!--  <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" title="Digite o seu nome completo" placeholder="Digite o seu nome" autofocus required />-->
                               {!! Form::label('description', 'Descrição:') !!} 
                               {!! Form::textarea('description', $categoria->description, ['class'=>'form-control']) !!}
                           </div>
                       </div>
                 
                  
                       <div class="form-group">
                           <div class="col-md-6">
                              <!-- <button type="submit" class="btn btn-primary">Criar</button>-->
                               {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
                            </div>
                            </div>
                      
              
                    </div>
               {!! Form::close() !!}
 
@endsection
