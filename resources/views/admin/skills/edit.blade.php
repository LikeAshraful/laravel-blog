@extends('admin.layouts.main')

@section('title','Edit Skills')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Edit Skills</h1>
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
                {!! Form::open(['url'=>'/admin/skills/' . $skill->id .'/edit', 'method'=>'POST' ]) !!}
                
                    <div class="form-group">
                        {!! Form::label('skill_title','Work Title:' ) !!}
                        {!! Form::text('skill_title', $skill->skill_title, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('skill_title'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('skill_title') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('skill_percent','Skill Percentage:' ) !!}
                         {!! Form::number('skill_percent', $skill->skill_percent, ['class' => 'form-control']) !!}
                    
                        @if ($errors->has('skill_percent'))
                            <span class="help-block alert alert-danger">
                                <strong>{{ $errors->first('skill_percent') }}</strong>
                            </span>
                        @endif
                    </div>
                   
                
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    </div>
                
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
    
@endsection
