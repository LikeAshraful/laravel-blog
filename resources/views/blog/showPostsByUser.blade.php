@extends('partials.layout.main')
    @section('title',$user->name)
    
    @section('nav')
        @include('partials.nav')
    @endsection

        @section('content')
        
            
          <section class="blog-content">
              <!-- Page Content -->
                <div class="container">
                    <div class="row">
                        <!-- Blog Entries Column -->
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Ashraful Islam Personal Blog<br/>
                                <small>I will share what I learn.</small>
                            </h1>
                        </div>
                        <div class="col-md-8">
                            
                            <!-- Blog Post -->
                            @foreach($posts as $post)
                            
                                <h2>
                                    <a href="/show/{{$post->id}}">{{$post->title}}</a>
                                </h2>
                                <p class="lead">
                                    by <a href="/blog/show/user-posts/{{$post->user->id}}">{{ $post->user->name}}</a>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at->format('D-M-Y')}}</p>
                                <hr>
                                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                                <hr>
                                <?php
                                    $str = $post->content ;
                                    $content = substr($str,0,200);
                                ?>
                                <p>{{$content}}</p>
                                   
                                    
                               
                                <a class="btn btn-primary" href="/show/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                
                                <hr>
                                
                                @endforeach
                         
                            <!-- Pager -->
                            <ul class="pager">
                                <li class="previous">
                                    <a href="#">&larr; Older</a>
                                </li>
                                <li class="next">
                                    <a href="#">Newer &rarr;</a>
                                </li>
                            </ul>
            
                        </div>
            
                        <!-- Blog Sidebar Widgets Column -->
                        <div class="col-md-4">
            
                            <!-- Blog Categories Well -->
                            <div class="well text-center">
                                <h4>Blog Categories</h4>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        @foreach($categories as $category)
                                        <ul class="list-unstyled">
                                            <li><a href="/blog/show/category/{{$category->name}}">{{$category->name}}</a>
                                            </li>
                                        </ul>
                                        @endforeach
                                    </div>
                                   
                                </div>
                                <!-- /.row -->
                            </div>
            
                            <!-- Side Widget Well -->
                            <div class="well">
                                <h4>Side Widget Well</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                            </div>
            
                        </div>
            
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
        @endsection
            