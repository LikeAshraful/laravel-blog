@extends('admin.layouts.main')

@section('title','Posts')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            
            
            <div class="col-md-10 col-md-offset-1">
                <h2>All Posts</h2>
                
                 @if( Session::has('message') )
                  <div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{Session::get('message')}}
                    </div>
                @endif
                
                <table class="table table-hover">
                    <tr>
                        <th>Serial No.</th>
                        <th>Post Title</th>
                        <th>Post Content</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    
                    
                    
                    
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td><a href="/show/{{$post->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                        <td><a href="/admin/edit/{{$post->id}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>
                        <td><a href="/post/delete/{{ $post->id }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                    </tr>
                    @endforeach
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    
            
@endsection