@extends('template')

@section('content')

<div class="container-fluid">
    <div class="row"><br />
        
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Atenção!</strong>Problemas
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
               
            <form method='POST' action='/auth/login'>
    
                {!! csrf_field() !!} <!--campo de proteção-->
                
                 {!! Form::hidden('token', email, ['class'=>'form-control']) !!}
                 
                <div class="row">
                        <div class="form-group">
                            <div class="col-md-8">
                                {!! Form::text('email', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'E-mail']) !!}
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class='form-group'>
                            <div class='col-md-6'> 
                                {!! Form::label('password', 'Password:') !!}
                                {!! Form::text('password', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class='form-group'>
                            <div class='col-md-6'> 
                              {!! Form::label('password', 'Password:') !!}
                              {!! Form::text('password_confirmation', null, ['class'=>'form-control']) !!}
                            </div>  
                        </div>
                </div>
                <div class="row">
                        <div class="form-group">
                            <div class='col-md-6'> 
                                {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
    </div>  
</div>
     
 @endsection
 