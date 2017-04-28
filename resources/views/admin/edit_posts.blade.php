@extends('admin.layouts.main')

@section('title','Edit Post')

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
            
         <div class="col-md-12">
            <h2>Update Post</h2>
        </div>
            
        <div class="col-md-7">
            
            {!! Form::open(['url'=>'/admin/edit/'.$post->id, 'method'=>'POST','files'=>'true' ]) !!}
             
              
                {{ Form:: label('category', 'Category:') }}
                {{ Form:: select('category', $categories, null, [ 'class' => 'select2-single form-control']) }}
              
                
                {{ Form:: label('tags', 'Tags:') }}
               
                {{ Form:: select('tags[]', $tags, null, [ 'class' => 'select2-multi form-control', 'multiple' => 'multiple' ]) }}
          
                
              <div class="form-group">
                 <label for="post_title">Post Title</label>
                 <input type="text" class="form-control" name="title" value="{{$post->title}}">
              </div>
        
              <div class="form-group">
                 <label for="content">Content</label>
                 <textarea rows="8" class="form-control" name="content">{{ $post->content }}</textarea>
              </div>
        
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ url('/admin/posts') }}" class="btn btn-warning">Cancel</a>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="image">Select Image</label>
                <input type="file" class="form-control" name="image" value="">
            </div>
            <div>
                <img src="/{{$post->img_thumb}}" width="200"></img>
            </div>
        </div>
        {!! Form::close() !!}
      </div>
    </<div>
@endsection

@section('js')
   <script type="text/javascript">
        $(".select2-single").select2()
        $(".select2-single").select2().val({!! $post->category->id !!}).trigger('change');
        
        $(".select2-multi").select2();
        $(".select2-multi").select2().val({!! $post->tag()->getRelatedIds() !!}).trigger('change');
    </script>

@endsection
