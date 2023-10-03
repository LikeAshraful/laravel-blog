@extends('admin.layouts.main')

@section('title', 'Add Category')

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
                <h2>Add New Category</h2>

                {{ html()->form('POST', '/admin/category/add')->open() }}

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" value="">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/admin') }}" class="btn btn-warning">Cancel</a>

                {{ html()->form()->close() }}
            </div>

            <div class="col-md-5 col-md-offset-2">
                <h2>All Categoies</h2>
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td><a href="/admin/category/edit/{{ $category->id }}"><button type="button"
                                        class="btn btn-warning"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i></button></a></td>
                            <td><a href="#"><button type="button" class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i></button></a></td>
                        </tr>
                    @endforeach
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>


@endsection
