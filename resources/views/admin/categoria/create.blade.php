
@extends('template')
@section('content')

      <div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Adicionar Categoria</h4>
            </div>
        </div>
      @if($errors->any())
        <div class='alert alert-danger'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
        </div>
        @endif
                 {!! Form::open(['route'=>'admin.categoria.salvar', 'method'=>'post']) !!}
                 
 <div class="row">
                 <div class="form-group">
                    <div class="col-md-5">
                        
                         {!! Form::label('name', 'Nome:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                 </div>
 </div>
                 <div class="row">
                 <div class="form-group">
                     <div class="col-md-8">
                         
                         {!! Form::label('description', 'Descrição:') !!}
                         {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
             </div>
 </div>
             <div class="modal-footer">
 
                 {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
 
                 {!! Form::close() !!}
                  <a id="add" href="{{ route('admin.categoria.index') }}" <button class="btn btn-default" type="submit" name="fechar">Fechar</button></a><br />
  
             </div>
         </div>
     </div>
 </div>
    
    @endsection
