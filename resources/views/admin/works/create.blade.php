@extends('admin.layouts.main')

@section('title','Add New Work')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Add New Work</h1>
            </div>
        </div>
        
        <div class="row">
          
             @if( Session::has('message') )
                  <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{Session::get('message')}}
                </div>
            @endif
            
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['url'=>'/admin/work/add', 'method'=>'POST', 'files'=>'true']) !!}
                
                    <div class="form-group">
                        {!! Form::label('title','Work Title:' ) !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('title'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('description','Description:' ) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '8x3']) !!}
                    
                        @if ($errors->has('description'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('image','Work Image:' ) !!}
                        {!! Form::file('image') !!}
                    
                        @if ($errors->has('image'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('date','Date:' ) !!}
                        {!! Form::date('date', null, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('date'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('service','Service Category:' ) !!}
                        {!! Form::text('service', null, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('service'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('service') }}</strong>
                            </span>
                        @endif
                    </div>
                
                    <div class="form-group">
                        {!! Form::submit('Create Work', ['class' => 'btn btn-primary']) !!}
                    </div>
                
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
    
@endsection
