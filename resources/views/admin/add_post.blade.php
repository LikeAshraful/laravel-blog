@extends('admin.layouts.main')

@section('title','Create New Post')

@section('content')

    <div id="page-wrapper">
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
            
        <div class="col-md-7">
            
            {!! Form::open(['url'=>'/post/create', 'method'=>'POST']) !!}
            
            <h2>Create New Post</h2>
            
              <div class="form-group">
                  <label for="id_label" >Select Category</label>
        		    <select class=" form-control js-example-basic-single" name="category">
        		        @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
        		    	@endforeach
                    </select>
              </div>
              
                <div class="form-group">
                  <label for="id_label_multiple" >Select Tag</label>
                      <select class="js-example-basic-multiple js-states form-control" id="id_label_multiple" name="tags[]" multiple="multiple">
                          
            		        @foreach($tags as $tag)
                                  <option value="{{$tag->id}}">{{$tag->name}}</option>
            		    	@endforeach
                      </select>
                  
                </div>
              <div class="form-group">
                 <label for="post_title">Post Title</label>
                 <input type="text" class="form-control" name="title" value="">
              </div>
        
              <div class="form-group">
                 <label for="content">Content</label>
                 <textarea rows="8" class="form-control" name="content"></textarea>
              </div>
        
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{ url('/admin/') }}" class="btn btn-warning">Cancel</a>
    
            {!! Form::close() !!}
        </div>
      </div>
    </<div>
@endsection