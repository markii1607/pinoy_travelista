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
	<!-- about -->
	<!-- about-top -->
	<div class="about-top">
		<!-- container -->
		<div class="container">
			<div class="about-info wow fadeInDown animated animated" data-wow-delay=".5s">
				<h2>About Us</h2>
			</div>
			<div class="about-top-grids">
				<div class="col-md-8 about-top-grid">
					<h4 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Quisque eget nunc a ligula lobortis facilisis sed ornare commodo nunc elementum ultricies fusce eget lorem fringilla 
						pharetra erat nam id enim nunc
					</h4>
					<p class="wow fadeInLeft animated animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla. 
						Mauris et quam leo. Quisque tincidunt facilisis rutrum. Etiam mattis arcu vitae velit sagittis vehicula. Duis posuere 
						ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta ex sodales, dignissim hendrerit 
						eros sagittis. Curabitur lacinia dui ut luctus congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis 
						eleifend augue. Integer sit amet euismod odio, at pretium lectus lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
				<div class="col-md-4 about-top-grid wow fadeInRight animated animated" data-wow-delay=".5s">
					<img src="images/s2.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //about-top -->
	<!-- about-team -->
	<div class="about-team" align="center">
			<!-- container -->
			<div class="container" align="center">
				<h3 class="wow fadeInUp animated animated" data-wow-delay=".5s">Our Team</h3>
				<div class="team-grids">
					<div class="col-md-3 team-grid wow fadeInUp animated animated" data-wow-delay=".5s">
						<div class="team-grid-img">
							<img src="images/t1.jpg" alt="" >
							<div class="icons">
								<ul>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="twitter facebook"></a></li>
									<li><a href="#" class="twitter chrome"></a></li>
									<li><a href="#" class="twitter dribbble"></a></li>
								</ul>
							</div>
						</div>
						<h6>convallis id mauris</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					<div class="col-md-3 team-grid wow fadeInUp animated animated" data-wow-delay=".5s">
						<div class="team-grid-img">
							<img src="images/t2.jpg" alt="" style="margin-right: -200px;">
							<div class="icons">
								<ul>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="twitter facebook"></a></li>
									<li><a href="#" class="twitter chrome"></a></li>
									<li><a href="#" class="twitter dribbble"></a></li>
								</ul>
							</div>
						</div>
						<h6>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;massa convallis</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					<div class="col-md-3 team-grid wow fadeInUp animated animated" data-wow-delay=".5s">
						<div class="team-grid-img">
							<img src="images/t3.jpg" alt="" style="margin-left: 200px;">
							<div class="icons">
								<ul>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="twitter facebook"></a></li>
									<li><a href="#" class="twitter chrome"></a></li>
									<li><a href="#" class="twitter dribbble"></a></li>
								</ul>
							</div>
						</div>
						<h6>leonec purus</h6>
						<p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
	</div>
	<!-- //about-team -->
	<!-- about-bottom -->
	<div class="about-bottom">
		<!-- container -->
		<div class="container">
			<h3 class="wow fadeInUp animated animated" data-wow-delay=".5s">Your Guarantees</h3>
			<div class="about-bottom-grids">
				<div class="col-md-6 about-bottom-left">
					<h4 class="wow fadeInUp animated animated" data-wow-delay=".5s">Morbi convallis urna sit amet feugiat</h4>
					<p class="wow fadeInUp animated animated" data-wow-delay=".5s">Vivamus sit amet molestie orci. Nullam porttitor porta lobortis. Mauris semper feugiat varius. Mauris nec ligula 
						diam. Cras ullamcorper lorem eu sapien viverra cursus. Pellentesque commodo libero eget malesuada blandit. 
						<span>Integer at imperdiet orci. Donec laoreet dignissim ex, vitae hendrerit nulla. Praesent efficitur ex vel tempus 
						blandit. Nunc sed purus ac sapien cursus eleifend vitae id ipsum. Mauris nec vehicula est. </span>
						Nullam ac odio massa nullam et condimentum magna, eget congue dui.Sed sit amet laoreet libero. Duis faucibus 
						felis et dolor ultrices pulvinar eu at orci.
					</p>
				</div>
				<div class="col-md-6 about-bottom-left about-bottom-right">
					<h4 class="wow fadeInUp animated animated" data-wow-delay=".5s">Morbi convallis urna sit amet feugiat</h4>
					<p class="wow fadeInUp animated animated" data-wow-delay=".5s">Vivamus sit amet molestie orci. Nullam porttitor porta lobortis. Mauris semper feugiat varius. Mauris nec ligula 
						diam. Cras ullamcorper lorem eu sapien viverra cursus. Pellentesque commodo libero eget malesuada blandit. 
						<span>Integer at imperdiet orci. Donec laoreet dignissim ex, vitae hendrerit nulla. Praesent efficitur ex vel tempus 
						blandit. Nunc sed purus ac sapien cursus eleifend vitae id ipsum. Mauris nec vehicula est. </span>
						Nullam ac odio massa nullam et condimentum magna, eget congue dui.Sed sit amet laoreet libero. Duis faucibus 
						felis et dolor ultrices pulvinar eu at orci.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //about-bottom -->
@endsection