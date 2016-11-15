@extends('../master')

@section('content')
	<!-- banner-top -->

	 <div class="header-top">
			<div class="body2">
			 <div class="top-nav">
						<div class="menu">
						<div class="logo">
						
						<a href="#"><img src="images/logo.png" style="pull-right:100px" style="margin-left: -200px;" class="img-responsive" width= "250px" alt=""/></a>
						</div>

						<ul id="nav">
							 <li><a href="home"><font color="black">Home</a></li>
							 <li><a href="about"><font color="black">About</a></li>
							 <li><a href="#section-3"><font color="black">Top Attractions</a></li>
							 <li><a href="#section-5"><font color="black">Contact</a></li>
							 <div class="clearfix"></div>
						 </ul>
						 </div>
						</div>
						</div>
			

		 </div>
	<!-- banner-top -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-grids">
				<div class="t-logo wow zoomIn animated animated" data-wow-delay=".5s">
					<div class="banner-left">
						<div class="banner-logo">
							<h1>
								<img src="images/jeep2.png" style="width:500px">
							</h1>
						</div>
					</div>
				</div>
				<div class="banner-right">
					<div class="banner-top-right-text wow fadeInUp animated animated" data-wow-delay=".5s">
						<h2>Your Travel Buddy</h2>
					</div>
					<div class="banner-right-top">
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						</script>
						<div id="top" class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
									<div class="banner-right-info">
										<h3 class="wow fadeInUp animated animated" data-wow-delay=".5s">Come and explore the amazing beauty of Philippines</h3>
										<p class="wow fadeInUp animated animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur adipiscing elit duis convallis erat est a euismod justo fringilla ut vestibulum a magna tempus sapien gravida consequat.</p>
										<div class="more-button wow fadeInUp animated animated" data-wow-delay=".5s">
											<a href="single">Click Here	</a>
										</div>
									</div>
								</li>
								<li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
									<div class="banner-right-info">
										<h3>Enjoy your stay!</h3>
										<p>Dolor lorem ipsum sit amet consectetur adipiscing elit duis convallis erat est a euismod justo fringilla ut vestibulum a magna tempus sapien consequat gravida.</p>
										<div class="more-button">
											<a href="single">Click Here	</a>
										</div>
									</div>
								</li>
								<li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
									<div class="banner-right-info">
										<h3>Wonderful Philippines</h3>
										<p>Dolor lorem ipsum sit amet consectetur adipiscing elit duis convallis erat est a euismod justo fringilla ut vestibulum a magna tempus sapien consequat gravida.</p>
										<div class="more-button">
											<a href="single">Click Here	</a>
										</div>
									</div>
								</li>
							</ul></div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="col-md-6 welcome-left">
				<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Welcome</h3>
				<h4 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis hendrerit libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</h4>
				<p class="wow fadeInLeft animated animated" data-wow-delay=".5s">Sed posuere laoreet neque, eu rhoncus libero accumsan eget. Morbi tempor nibh ullamcorper urna hendrerit, at molestie tortor molestie. Suspendisse vel porttitor metus, vitae luctus velit. Donec dictum suscipit orci nec facilisis. Sed pretium eu diam id tincidunt. </p>
			</div>
			<div class="col-md-6 welcome-right">
				<div class="welcome-right-top wow fadeInUp animated animated" data-wow-delay=".5s">
					<img src="images/w1.jpg">
				</div>
				<div class="welcome-right-bottom wow fadeInRight animated animated" data-wow-delay=".5s">
					<img src="images/w2.jpg">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- welcome-bottom -->
	<div class="welcome-bottom">
		<div class="col-md-6 welcome-bottom-left">
			<div class="welcome-bottom-left-grid">
				<h3 class="wow fadeInUp animated animated" data-wow-delay=".5s">Let's enjoy the wonders of the nature together</h3>
				<h4 class="wow fadeInUp animated animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis hendrerit libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</h4>
				<p class="wow fadeInUp animated animated" data-wow-delay=".5s">Nam vel scelerisque lectus, in finibus neque. Sed id tristique sapien. Integer in augue nec tellus hendrerit viverra vehicula ac sapien. Nulla tincidunt nisi efficitur, gravida nisl at, posuere nisi Nam vel scelerisque lectus, in finibus neque. Sed id tristique sapien. Integer in augue nec tellus hendrerit viverra vehicula ac sapien</p>
				<div class="more-button welcome-button wow fadeInUp animated animated" data-wow-delay=".5s">
					<a href="single">Click Here	</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 welcome-bottom-right">
			<div class="welcome-bottom-right-top-info wow zoomIn animated animated" data-wow-delay=".5s">
				<div class="welcome-bottom-right-top">
					<div class="welcome-bottom-right-info">
						<h3>Best places in the city</h3>
						<div class="more-button welcome-right-button">
							<a href="single">Click Here	</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //welcome-bottom -->
	<!-- services --->
	<div class="services">
		<div class="container">
			<div class="services-info">
				<h3 class="wow fadeInUp animated animated" data-wow-delay=".5s">Featured Trips</h3>
			</div>
			<div class="services-grids">
				<div class="col-md-4 services-grid wow fadeInLeft animated animated" data-wow-delay=".5s">
					<div class="services-grid-top">
						<div class="services-grid-img">
							<img src="images/s1.jpg" alt="" />
						</div>
						<div class="services-grid-info">
							<h4>Vivamus laoreet elit ligula</h4>
							<p>Integer metus eros, varius vitae tellus at, finibus tincidunt purus. Integer quam velit, tempus sodales elit vitae, molestie gravida est.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 services-grid wow fadeInUp animated animated" data-wow-delay=".5s">
					<div class="services-grid-top">
						<div class="services-grid-info">
							<h4>Vivamus laoreet elit ligula</h4>
							<p>Integer metus eros, varius vitae tellus at, finibus tincidunt purus. Integer quam velit, tempus sodales elit vitae, molestie gravida est.</p>
						</div>
						<div class="services-grid-img">
							<img src="images/s2.jpg" alt="" />
						</div>
					</div>
				</div>
				<div class="col-md-4 services-grid">
					<div class="services-right wow fadeInRight animated animated" data-wow-delay=".5s">
						<h4>Hot tours</h4>
						<p>Vivamus nec nulla et nisi ornare fringilla</p>
					</div>
					<div class="services-right services-right-middle wow fadeInRight animated animated" data-wow-delay=".5s">
						<h4>Consulting</h4>
						<p>Pellentesque cursus lobortis convallis</p>
					</div>
					<div class="services-right wow fadeInRight animated animated" data-wow-delay=".5s">
						<h4>Hotels</h4>
						<p>Mauris euismod eros vel urna maximus</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
@endsection
