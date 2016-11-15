@extends('../master')

@section('content')
	<!-- banner-top -->
	<div class="banner-top">
		<div class="container">
			<div class="banner-top-left wow fadeInLeft animated animated" data-wow-delay=".5s">
				<p>Email : <a href="mailto:example@email.com">mail@example.com</a></p>
			</div>
			<div class="banner-top-right wow fadeInRight animated animated" data-wow-delay=".5s">
				<p>Phone : +1 234 567 8901</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- banner-top -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-grids about-grids wow zoomIn animated animated" data-wow-delay=".5s">
				<div class="banner-left about-left">
					<div class="banner-logo about-logo">
						<h1>
							<a href="home">Traverse</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="top-navigation about-navigation">
			<div class="container">
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>{{ HTML::link('home', 'Home') }}</li>
								<li>{{ HTML::link('about', 'About') }}</li>
								<li>{{ HTML::link('codes', 'Codes') }}</li>
								<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>{{ HTML::link('gallery1', 'Gallery1', array('class' => 'hvr-bounce-to-bottom')) }}</li>
										<li>{{ HTML::link('gallery2', 'Gallery2', array('class' => 'hvr-bounce-to-bottom')) }}</li>
										<li>{{ HTML::link('gallery3', 'Gallery3', array('class' => 'hvr-bounce-to-bottom')) }}</li>           
									</ul>
								</li>	
								<li>{{ HTML::link('blog', 'Blog') }}</li>
								<li>{{ HTML::link('contact', 'Contact') }}</li>
							</ul>	
							<div class="clearfix"> </div>
						</div>		
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="contact-info wow fadeInDown animated animated" data-wow-delay=".5s">
				<h2>Contact</h2>
			</div>
			<div class="map wow fadeInUp animated animated" data-wow-delay=".5s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158858.18237072596!2d-0.10159865000003898!3d51.52864165000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436514341845" allowfullscreen></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated animated" data-wow-delay=".5s">
					<h3>Address</h3>
					<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>CG 09-123</span>
						London, Ba. 4567
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="col-md-6 contact-form wow fadeInRight animated animated" data-wow-delay=".5s">
					<form>
						<input type="text" placeholder="Name" required="">
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Subject" required="">
						<textarea placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
@endsection