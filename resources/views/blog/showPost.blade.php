@extends('partials.layout.main')

<?php $postTitle = $post->title; ?>

@section('title', $postTitle)

@section('nav')
    @include('partials.nav')
@endsection

@section('content')

    <!--           <h1></h1>-->
    <!--           <small>Posted By: at {{ $post->created_at->format('D-M-Y') }}</small>-->
    <!--           <p>{{ $post->content }}</p>-->

    <!--           <hr>-->

    <section class="blog-content">
        <div class="container">

            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-lg-8">

                    <!-- Blog Post -->

                    <!-- Title -->
                    <h1>{{ $post->title }}</h1>

                    <!-- Author -->
                    <p class="lead">
                        by <a href="/blog/show/user-posts/{{ $post->user->id }}">{{ $post->user->name }}</a>
                    </p>

                    <hr>

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('D-M-Y') }}</p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-responsive" src="/{{ $post->img_path }}" alt="{{ $post->img_name }}" width="">

                    <hr>

                    <!-- Post Content -->
                    <p class="lead">{{ $post->content }}</p>


                    <div class="tags">

                        @foreach ($post->tags as $tag)
                            <span class="label label-primary">
                                <a href="/blog/show/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                            </span>&nbsp;&nbsp;
                        @endforeach
                    </div>


                    <hr>

                    <h2>Total Comments: {{ $post->comment->count() }}</h2>

                    @if ($post->comment->count() == 0)
                        <p>No Comments yet! Be the first</p>
                    @endif
                    <div>
                        @foreach ($post->comment as $comment)
                            <p><strong>Name:</strong> {{ $comment->name }}</p>
                            <p><strong>Comment:<br /></strong> {{ $comment->content }}</p><br /><br />
                        @endforeach
                    </div>

                    @if (Session::has('errors'))
                        <div class="alert alert-danger" role="alert" align="center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div>
                        {{ html()->form('POST')->route('comments.store', $post->id)->open() }}

                        <div>
                            {{ html()->label('name', 'Name:') }}
                            {{ html()->text('name', null) }}
                        </div>
                        <br>
                        <div>
                            {{ html()->label('email', 'Email:') }}
                            {{ html()->text('email', null) }}
                        </div>
                        <br>
                        <div>
                            {{ html()->label('comment', 'Comment:') }}
                            {{ html()->textarea('comment', null, ['rows' => '3']) }}
                        </div>

                        {{ html()->submit('Add Comment') }}

                        {{ html()->form()->close() }}
                    </div>
                    <br>
                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Blog Categories Well -->
                    <div class="well text-center">
                        <h4>Blog Categories</h4>
                        <div class="row">
                            <div class="col-lg-12 ">
                                @foreach ($categories as $category)
                                    <ul class="list-unstyled">
                                        <li><a href="/blog/show/category/{{ $category->name }}">{{ $category->name }}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>

                    <!-- Side Widget Well -->
                    <div class="well">
                        <h4>Blog Tags</h4>

                        @foreach ($tags as $tag)
                            <span class="label label-primary">
                                <a href="/blog/show/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                            </span>&nbsp;&nbsp;
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>
