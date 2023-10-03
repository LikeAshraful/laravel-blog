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
                <h1>Add New Tag</h1>

                {{ html()->form('POST', '/admin/tag/add')->open() }}


                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" class="form-control" name="name" value="">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/admin/tag/') }}" class="btn btn-warning">Cancel</a>

                {{ html()->form()->close() }}
            </div>


            <div class="col-md-4 col-md-offset-3">
                <h2>All Tags</h2>
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Tag Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td><a href="/admin/tag/edit/{{ $tag->id }}"><button type="button"
                                        class="btn btn-warning"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i></button></a></td>
                            <td><a href="/admin/tag/delete/{{ $tag->id }}"><button type="button"
                                        class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $tags->links() }}
            </div>
        </div>
    </div>


@endsection
