@extends('partials.layout.main')

@section('title', 'web developer')

@section('nav')
@include('partials.nav_home')
@endsection

@section('content')
 <header>
        <div class="container">
            
            <div class="col-md-12 ">
                    <img class="img-circle header-img" src="assets/img/profile.jpg" width="250" height="250"></img>    
                </div>
            <div class="intro-text">
                <div class="intro-heading">Ashraful Islam Palash</div>
                <div class="intro-lead-in">Web Developer & Laravel Hunter</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>        
        
    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Me</h2>
                    <hr class="light">
                    <p class="text-faded">This is Ashraful Islam from Bangladesh.I am a web Developer
                        who appreciates to create professional and dynamic websites using Laravel PHP Framework.I define myself as 
                        a Web Application Developer, Programmer and CMS Customizer with a creative twist.
                    </p>
                    <a href="/resume" class="page-scroll btn btn-default sr-button" data-sr-id="6" >See My Resume</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="skills-section" id="skills">
        <div class="container">
            <h2> Some of My Skills</h2>
            <div class="row">
                <div class="bar" data-percent="70">
            		<h3>Laravel</h3>
            	 </div>
            	 
            	 <div class="bar" data-percent="75">
            		<h3>PHP</h3>
            	 </div>
            	 
            	 <div class="bar" data-percent="80">
            		<h3>HTML5</h3>
            	 </div>
            	 
            	 <div class="bar" data-percent="80">
            		<h3>CSS</h3>
            	 </div>
            	 
            	 <div class="bar" data-percent="50">
            		<h3>JS</h3>
            	 </div>
            	 
            	 <div class="bar" data-percent="80">
            		<h3>Bootstrap</h3>
            	 </div>

            </div>
        </div>
    </section>
@endsection
