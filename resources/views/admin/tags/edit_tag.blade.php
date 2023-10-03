@extends('admin.layouts.main')

@section('title', 'Tags')

@section('content')

    <div id="page-wrapper">
        <div class="row">

            @if (Session::has('errors'))
                <div class="alert alert-danger alert-dismissible" role="alert" align="center">
                    <ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::has('message'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    {{ Session::get('message') }}
                </div>
            @endif


            <div class="col-md-4">
                <h1>Edit Tag</h1>

                {{ html()->form('POST', '/admin/tag/edit/' . $tag->id)->open() }}

                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" class="form-control" name="name" value="{!! $tag->name !!}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/admin/tag') }}" class="btn btn-warning">Cancel</a>

                {{ html()->form()->close() }}
            </div>

        </div>
    </div>


@endsection
