@extends('admin.layouts.main')

@section('title', 'Add New Work')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Add New Work</h1>
            </div>
        </div>

        <div class="row">

            @if (Session::has('message'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="col-md-10 col-md-offset-1">

                {{ html()->form('POST', '/admin/work/add')->acceptsFiles()->open() }}

                <div class="form-group">
                    {{ html()->label('title', 'Work Title:') }}
                    {{ html()->text('title', null, ['class' => 'form-control']) }}

                    @if ($errors->has('title'))
                        <span class="help-block alert alert-danger">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->label('description', 'Description:') }}
                    {{ html()->textarea('description', null, ['class' => 'form-control', 'size' => '8x3']) }}

                    @if ($errors->has('description'))
                        <span class="help-block alert alert-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->label('image', 'Work Image:') }}
                    {{ html()->file('image') }}

                    @if ($errors->has('image'))
                        <span class="help-block alert alert-danger">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->label('date', 'Date:') }}
                    {{ html()->date('date', null, ['class' => 'form-control']) }}

                    @if ($errors->has('date'))
                        <span class="help-block alert alert-danger">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->label('service', 'Service Category:') }}
                    {{ html()->text('service', null, ['class' => 'form-control']) }}

                    @if ($errors->has('service'))
                        <span class="help-block alert alert-danger">
                            <strong>{{ $errors->first('service') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->submit('Create Work', ['class' => 'btn btn-primary']) }}
                </div>

                {{ html()->form()->close() }}

            </div>
        </div>
    </div>

@endsection
