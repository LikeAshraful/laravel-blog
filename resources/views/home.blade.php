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

    <!--START WORK SECTION-->
	
	<section id="work">
	        <div class="container wow fadeInUp" data-wow-offset="10" data-wow-duration="1.5s" data-wow-delay=".3s">
	            <div class="row">
	                <div class="col-md-12 text-center">
	                    <h2>Works</h2>
	                </div>
	            </div>
	            <div class="row">
	            	@foreach($works as $work)
	                <div class="col-md-4 col-sm-6 work-single">
	                    <a href="#{{ $work->id}}" class="work-link" data-keyboard="true" data-toggle="modal">                      
	                        
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
					<h3>{{ $work->title }}</h3>
	                            </div>
	                        </div>
	                        <img src="{{ $work->img_path }}" class="img-responsive" alt="{{ $work->title }}"  style="width:450px;height:300px;">
	                    </a>
	                    
	                </div>
	                @endforeach
	            </div>
	        </div>
	    </section>
    
    <!--END WORK SECTION-->

    <!--START WORK MODALS-->
    
    @foreach($works as $work)
    
    <div class="work-modal modal fade" id="{{ $work->id }}" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false" data-keyboard="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                	
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>{{ $work->title }}</h2>
                            <img src="{{ $work->img_path }}" class="img-responsive img-centered" alt="{{ $work->img_name }}">
                            <p>
                            	{{ $work->description }}
                            </p>
                            <ul class="list-inline item-details">
                                
                                <li>Date:
                                    <strong><a href="#">{{ $work->date }}</a></strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">{{ $work->service }}</a></strong>
                                </li>
                            </ul>
                            
                            <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    <!--END WORK MODALS-->
    @endforeach
    
    
    
    <!-- Work Progress Counter -->     

    <section id="work-progress">
        <div class="container">
            <div class="row">
                <div class="service-counter">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="counter text-center">         
                            <span class="countup">4502</span>
                            <p>Project Done</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="counter text-center">           
                            <span class="countup">0085</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="counter text-center">          
                            <span class="countup">0451</span>
                            <p>Job Hired</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="counter text-center">           
                            <span class="countup">0089</span>
                            <p>New Project</p>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- Container -->
    </section> <!-- page-work-progress -->

    
    <section class="skills-section" id="skills">
        <div class="container">
            <h2>My Skills</h2>
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
    
    
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="http://placehold.it/900x300" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    
@endsection
