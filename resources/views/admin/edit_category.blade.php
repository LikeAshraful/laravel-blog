@extends('admin.layouts.main')

@section('title', 'Edit Category')

@section('content')

    <div id="page-wrapper">
        <div class="row">

            @if (Session::has('errors'))
                <div class="alert alert-danger alert-dismissible" role="alert" align="center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <ul>
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
                <h2>Edit Category</h2>

                {{ html()->form('POST', '/admin/category/edit/' . $category->id)->open() }}

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $category->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/admin/category') }}" class="btn btn-warning">Cancel</a>

                {{ html()->form()->close() }}
            </div>
        </div>
    </div>


@endsection
