@extends('admin.layouts.main')

@section('title','Create New Post')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Add New User</h1>
            </div>
        </div>
        
        <div class="row">
           @if( Session::has('errors') )
              <div class="alert alert-danger" role="alert" align="center">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <ul>
                 @foreach($errors->all() as $error) 
                    <li>{{$error}}</li>
                 @endforeach
              </ul>
              </div>
            @endif
            
             @if( Session::has('message') )
                  <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{Session::get('message')}}
                </div>
            @endif
            
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['url'=>'/admin/user/add', 'method'=>'POST']) !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name','Name:' ) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email','Email:' ) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id',['' => 'Choose Role'] + $roles ,null, ['class' => 'form-control']) !!}
                    
                    @if ($errors->has('role_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role_id') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active',array(1 => 'Active', 0 =>'Not Active'), 0, ['class' => 'form-control']) !!}
                    
                    @if ($errors->has('is_active'))
                        <span class="help-block">
                            <strong>{{ $errors->first('is_active') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label('password','Password:' ) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">
                    {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
                </div>
                
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
    
@endsection
