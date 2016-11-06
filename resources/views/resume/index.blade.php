@extends('partials.layout.main')

@section('title','Resume')

@section('nav')
    @include('partials.nav')
@endsection

@section('content')
    <section class="header-resume">
        <div class="container">
            <div class="row">
                <div class="resume-heading text-center">
                    <div class="resume-intro">Ashraful Islam Palash</div>
                    <div class="resume-lead-in">Web Developer & Laravel Hunter</div>
                
                </div>
            </div>
        </div>
    </section>
    
     <section class="intro-section" id="about">
        
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p>I'm web designer &amp; front-end developer with 7 years of professional experience. I'm interested in all kinds of visual communication, but my major focus is on designing web, mobile &amp; tablet interfaces. I also have skills in other fields like branding, icon design or web development.</p>
				</div>
				<div class="col-lg-3">
					<p><a href="#"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i> <sm>  DOWNLOAD MY RESUME</sm></p></a>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->

    </section>
    
    <section id="resume" name="resume">
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Master of Web Design</t><br/>
						St. Patrick University <br/>
						<i>3 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>GRADUATING IN MAY 2014</sm><br/>
					<imp><sm>IN PROGRESS</sm></imp>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Degree of Web Developer</t><br/>
						Hastings University <br/>
						<i>2 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2012</sm></p>
				</div>
	
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	<!--WORK DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Front-end Developer</t><br/>
						Black Tie Corp. <br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>AUGUST 2012 - CURRENT</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Web Designer - Intern</t><br/>
						Onassis Ltd. <br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2010 - JULY 2012</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->


	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
						<div class="col-lg-8">
						<div class="centered resume-bar" data-percent="70">
							<p>Laravel</p>
						</div>
						<div class=" centered resume-bar" data-percent="75">
							<p>PHP</p>
						</div>
						<div class=" centered resume-bar" data-percent="80">
							<p>HTML</p>
						</div>
						<div class=" centered resume-bar" data-percent="80">
							<p>CSS</p>
						</div>
						<div class=" centered resume-bar" data-percent="50">
							<p>Javascript</p>
						</div>
						<div class=" centered resume-bar" data-percent="80">
							<p>Bootstrap</p>
						</div>
					</div>
					
			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->
	
	</section>


@endsection

