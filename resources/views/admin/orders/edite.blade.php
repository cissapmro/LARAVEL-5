
@extends('template')
@section('content')
<div class="container">
 <div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Editar Status</h4>
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
        
                 {!! Form::open(['route'=>['admin.orders.updateStatus', $order->id], 'method'=>'put']) !!}
                <div class="row">
                    <div class="form-group">
                      <div class="col-sm-3">
                        {!! Form::label('status','Status:') !!}
                        <!-- {!! Form::select('status', ['0' => 'Pagamento Pendente', '1' => 'Pagamento Realizado'], $order->status, ['class'=>'form-control']) !!}-->
                       {!! Form::select('status', $status, $order->status, ['class'=>'form-control']) !!}
                      </div>
                    </div>
                </div>
                <div class="row">
                    
                        <div class="col-sm-2">
                            {!! Form::submit('Alterar Status', ['class'=>'btn btn-primary']) !!}
                        </div>
                   
                   
                        <div class="col-sm-2">
                            <a id="add" href="{{ route('admin.orders.index') }}" <button class="btn btn-primary" type="submit" name="fechar">Fechar</button></a><br />
                        </div>
                  
                   
                        <!-- <button type="submit" class="btn btn-default" data-dismiss="modal">Fechar</button>-->
              
                </div>
                  {!! Form::close() !!}
         </div>
    
 
@endsection
   