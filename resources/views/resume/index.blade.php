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
					<h3>Hello !</h3>
					<p>This is Ashraful Islam from Dhaka, Bangladesh. I am a Web Developer in PHP, Laravel Hunter &amp; CMS Customizer who appreciates to create 
						professional and dynamic web apllications. I have been working on PHP, HTML5, CSS, jQuery, Bootstrap &amp; Laravel for more than two years. </p>
				</div>
				<div class="col-lg-3">
					<p><a href="/assets/resume/Ashraful_programmer.pdf" target="_blank"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i> <sm> DOWNLOAD MY RESUME</sm></p></a>
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
					<p><t><strong> BSc. in Computer Science & Engineering </strong></t><br/>
						University of Information Technology & Sciences <br/>
						<i>4 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>Passing Year: 2015</sm><br/>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><strong>Higher Secondary Certificate (HSC)</strong></t><br/>
						Govt. Gafargoan College, Mymensingh <br/>
						Group: Science<br />
						<i>2 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>Dhaka Board</sm></p>
					<p><sm>Passing Year: 2009</sm></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
				<p><t><strong>Secondary School Certificate (SSC)</strong></t><br/>
					Toke Ranendra High School,Kapasia, Gazipur <br/>
					Group: Science<br />
					<i>2 Years Course</i>
				</p>
				</div>
				<div class="col-lg-3">
					<p><sm>Dhaka Board</sm></p>
					<p><sm>Passing Year: 2006</sm></p>
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
					<p><t><strong> Web Developer</t><br/>
						Upgrade Retail </strong> <br/>
					</p>
					<p><more>Design, develop and improve their existing websites. 
						Identify technical problems and procedures and communicate their applicable solutions. 
						Also performing as a Web Master.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>MARCH 2016 - CURRENT</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t><strong>Web Developer - Intern</t><br/>
						Engineering Staff College Bangladesh (ESCB) </strong><br/>
						Website: <a href="http://www.esc-bd.org/" target = "_blank">www.esc-bd.org</a>
					</p>
					<p><more>Creating a Trainee Management System in PHP.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>SEPTEMBAR 2015 - DECEMBAR 2015</sm></p>
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
			<br />
			<br />
			<hr>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->
	
	
		<div class="container desc">
		<div class="row">
	
			<div class="col-lg-2 col-lg-offset-1">
				<h5>SOME OF MY PROJECTS</h5>
			</div>
			<div class="col-lg-6 col-lg-offset-2">
				<p><t><strong>Blue Angel Fashion Ltd.</t><br/>
					URL : <a href="http://www.blueangelfashionbd.com/" target = "_blank">www.blueangelfashionbd.com</a> </strong> <br/>
					Tools: Laravel, Bootstrap, HTML, CSS, Javascript.
				</p>
				
				<hr>
				<p><t><strong>My Personal Portfolio</t><br/>
					URL : <a href="http://www.likeashraful.xyz/" target = "_blank">www.likeashraful.xyz</a> </strong> <br/>
					Tools: Laravel, Bootstrap, HTML5, CSS, JQuary.
				</p>
				<p><more></more></p>
				
				<hr>
				<p><t><strong>Lara- HTML Template</t><br/>
					URL : <a href="https://likeashraful.github.io/Lara/" target = "_blank">Lara</a> </strong> <br/>
					Tools: Bootstrap, HTML5, CSS3, JQuary.
				</p>
				<p><more></more></p>
			</div>
			

			
		</div><!--/.row -->
		<br>
	
	</div><!--/.container -->
	
	</section>


@endsection

