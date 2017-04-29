@extends('admin.layouts.main')

@section('title','Add New Skills')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Add New Skills</h1>
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
                {!! Form::open(['url'=>'/admin/skills/add', 'method'=>'POST']) !!}
                
                    <div class="form-group">
                        {!! Form::label('skill_title','Skill Title:' ) !!}
                        {!! Form::text('skill_title', null, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('skill_title'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('skill_title') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('skill_percent','Skill Percentage:' ) !!}
                         {!! Form::number('skill_percent', null, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('skill_percent'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('skill_percent') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::submit('Create Skill', ['class' => 'btn btn-primary']) !!}
                    </div>
                
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
    
@endsection
