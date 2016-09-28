
@extends('template')
@section('content')

      <div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Adicionar Produto</h4>
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
                 {!! Form::open(['route'=>'admin.produto.salvarProduto', 'method'=>'post']) !!}
 
                 <div class="row">
     
                 <div class="form-group">
                    <div class="col-md-2">
                        
                         {!! Form::label('category', 'Categoria:') !!}
                        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                    
                    </div>
                 </div>
 </div>
                 
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
                 <div class="row">
                <div class="form-group">
                    <div class="col-md-2">
                         
                         {!! Form::label('price', 'Price:') !!}
                         {!! Form::text('price', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                 </div>
                 <div class="row">
                <div class="form-group">
                    <div class="col-md-2 col-md-offset5">
                        {!! Form::label('destaque', 'Destaque:') !!}
                        <select name='featured' id='destaque' class='form-control'>
                            <option value="0">Mais vendidos</option>
                            <option value="1">Em promoção</option>
                        </select>
                    </div>
                   
                </div>
                 </div>
                     
                      <div class="row">
                       <div class="form-group">
                            <div class="col-md-4">
                           	     <label for="" >Recomendado?</label> <br />
			                     <input type="radio" name="recommend" id="optionsRadios1" value="0" checked>
			                     Sim
			                     <input type="radio" name="recommend" id="optionsRadios2" value="1" checked>
			                     Não
			                    
                            </div>
                       </div>
                  </div>
                 </div>
                    
             </div>

             <div class="modal-footer">
 
                 {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
 
                 {!! Form::close() !!}
                 <a id="add" href="{{ route('admin.produto.index') }}" <button class="btn btn-default" type="submit" name="fechar">Fechar</button></a><br />
             </div>
     </div>
         </div>
     </div>
 @endsection
   

   