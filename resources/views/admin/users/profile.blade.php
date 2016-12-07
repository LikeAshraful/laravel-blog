@extends('partials.layout.main')

@section('title', 'profile')

@section('nav')
@include('partials.nav')
@endsection

@section('content')

<section class="blog-content">
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{Auth::user()->name}} </div>
                

                <div class="panel-body">
                    Name: {{Auth::user()->name}}
                </div><br>
                
                <div class="panel-body">
                    Email: {{Auth::user()->email}}
                </div><br>
                
                <div class="panel-body">
                    Your ID: {{Auth::user()->id}}
                </div><hr>
                
                <div class="panel-body">
                    Role: {{Auth::user()->role->name}}
                </div><hr>
                
                <div class="panel-body">
                    Status: {{Auth::user()->is_active == 1 ? 'Active' : 'Not Active' }}
                </div>
            </div>
        </div>
    </div>
</div>
    
</section>

@endsection