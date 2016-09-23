
 <div class="modal fade" id="edite" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
     <div class="modal-dialog">
             
        <div class="modal-content">
            <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <div>
                     <h4 class="text-info"><i class="fa fa-pencil fa-3x"></i>Editar {{ $categoria->name }}</h4>
                </div>
           </div>
 <div id="conteudoModal" class="modal-body">
             
      <!--  {{ print_r($errors)}}-->
      @if($errors->any())
        <div class='alert alert-danger'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
        </div>
        @endif
                 {!! Form::open(['route'=>['admin.categoria.update', $categoria->id], 'method'=>'post']) !!}
                
 <div class="row">
                 <div class="form-group">
                    <div class="col-md-5">
                        
                         {!! Form::label('name', 'Nome:') !!}
                        {!! Form::text('name', $categoria->name, ['class'=>'form-control']) !!}
                    </div>
                 </div>
 </div>
                 <div class="row">
                 <div class="form-group">
                     <div class="col-md-8">
                         
                         {!! Form::label('description', 'Descrição:') !!}
                         {!! Form::textarea('description', $categoria->description, ['class'=>'form-control']) !!}
                    </div>
                </div>
             </div>
 </div>
             <div class="modal-footer">
 
                 {!! Form::submit('Salvar categoria', ['class'=>'btn btn-primary']) !!}
 
                 {!! Form::close() !!}
                 <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
             </div>
         </div>
     </div>
 </div>
 