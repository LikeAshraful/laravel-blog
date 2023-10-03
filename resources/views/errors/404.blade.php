@extends('partials.layout.main')

@section('title','404 error')

    @section('nav')
         @include('partials.nav')
    @endsection

@section('content')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="padding-top:250px; padding-bottom:250px; background-color:#fff;">
                    <h2>404 ERROR</h2>
                    <h4>There isn't any Pages here.</h4>
                </div>
            </div>
        </div>
    
    </section>
@endsection

