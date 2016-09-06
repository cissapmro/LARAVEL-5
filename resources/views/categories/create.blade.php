
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

                <div>
                    <h4 class="modal-title text-info"><i class="fa fa-pencil fa-3x"></i>Customer Info</h4>
                </div>
            </div>
            <div id="conteudoModal" class="modal-body">
                 @if ($errors->any())
                  <div class="alert alert-danger">
                   @foreach($errors->all() as $error)
                   {{ $error }}<br />
                   @endforeach
                </div>
                 
                 @endif
                   {!! Form::open(['route'=>'categories.store']) !!}
                  
                    <div class="form-group">
                            <div class="col-md-6">
                               <!--  <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" title="Digite o seu nome completo" placeholder="Digite o seu nome" autofocus required />-->
                               {!! Form::label('name', 'Nome:') !!} 
                               {!! Form::text('name', null, ['class'=>'form-control']) !!}
                            </div>  
                           
                            </div>
                
                 
                       <div class="form-group">
                           <div class="col-md-6">
                               <!--  <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" title="Digite o seu nome completo" placeholder="Digite o seu nome" autofocus required />-->
                               {!! Form::label('description', 'Descrição:') !!} 
                               {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                           </div>
                       </div>
                 
            </div>
            <div class="modal-footer">
                 {!! Form::submit('Adicionar', ['class'=>'btn btn-primary']) !!}
                 
                 {!! Form::close() !!}
            </div>
        </div>
   </div>
     