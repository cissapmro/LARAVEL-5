
 <div class="modal fade" id="edite" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
     
     <div class="modal-dialog">
             
        <div class="modal-content">
            <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <div>
                     <h4 class="text-info"><i class="fa fa-pencil fa-3x"></i>Criar Produto</h4>
                </div>
           </div>
 <div id="conteudoModal" class="modal-body">
             <div class="container-fluid">
      <!--  {{ print_r($errors)}}-->
      @if($errors->any())
        <div class='alert alert-danger'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
        </div>
      
        @endif
        
                 {!! Form::open(['route'=>['admin.produto.updateProduto', $produto->id], 'method'=>'post']) !!}
 <div class="row">
                 <div class="form-group">
                    <div class="col-md-5">
                        
                         {!! Form::label('name', 'Nome:') !!}
                        {!! Form::text('name', $produto->name, ['class'=>'form-control']) !!}
                    </div>
                 </div>
 </div>
                 <div class="row">
                 <div class="form-group">
                     <div class="col-md-8">
                         
                         {!! Form::label('description', 'Descrição:') !!}
                         {!! Form::textarea('description', $produto->description, ['class'=>'form-control']) !!}
                    </div>
                </div>
                 </div>
                 <div class="row">
                <div class="form-group">
                    <div class="col-md-3">
                         
                         {!! Form::label('price', 'Price:') !!}
                         {!! Form::text('price', $produto->price, ['class'=>'form-control']) !!}
                    </div>
                </div>
                 </div>
                 <div class="row">
                <div class="form-group">
                    <div class="col-md-4 col-md-offset5">
                        {!! Form::label('destaque', 'Destaque:') !!}
                        {!! Form::select('featured', ['0' => 'Mais vendidos', '1' => 'Em promoção'], $produto->featured, ['class' => 'form-control']) !!}
  
                    </div>
                   
                </div>
                 </div>
                     
                      <div class="row">
                       <div class="form-group">
                            <div class="col-md-4">
                                {!! Form::label('recommend', 'Recomendado?') !!}
                           	     <div class="radio">
                                         
            <label>
                
                {!! Form::radio('recommend', 1, $produto->recommend == 1) !!}
                Sim
            </label>
            <label>
                {!! Form::radio('recommend', 0, $produto->recommend == 0) !!}
                Não
            </label>
        </div>
			                    
                            </div>
                       </div>
                  </div>
                 </div>
                    
             </div>

             <div class="modal-footer">
 
                 {!! Form::submit('Alterar produto', ['class'=>'btn btn-primary']) !!}
 
                 {!! Form::close() !!}
                 <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
             </div>
     </div>
         </div>
     </div>

     <style>
         #modal {
             overflow-y: auto;
         }
           </style> 
           
          
       