
@extends('template')
@section('content')

      <div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Upload Imagem</h4>
            </div>
        </div>
      <!--  {{ print_r($errors)}}-->
     @if($errors->any())
        <div class='alert alert-danger'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
        </div>
      
        @endif
                 {!! Form::open(['route'=>['admin.produto.salvarImagem', $produto->id], 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}
 
                 <div class="row">
     
                 <div class="form-group">
                    <div class="col-md-2">
                        
                         {!! Form::label('image', 'Imagem:') !!}
                        {!! Form::file('image', null, ['class'=>'form-control']) !!}
                    
                    </div>
                 </div>
 </div>
                 
                 
                    
                 </div>
                    
                         <div class="modal-footer">
 
                 {!! Form::submit('Upload Imagem', ['class'=>'btn btn-primary']) !!}
 
                 {!! Form::close() !!}
                
             </div>

 @endsection
   

   