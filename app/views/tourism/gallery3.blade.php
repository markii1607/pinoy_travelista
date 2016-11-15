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
			<div class="banner-grids about-grids">
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
	<!-- gallery -->
		<div class="gallery">
			<div class="container">
				<div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
					<h2>Gallery</h2>
				</div>
				
				<div class="gallery-grids">
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g1.jpg" alt="" />
									<figcaption>
										<h4>Santorini</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g2.jpg" alt="" />
									<figcaption>
										<h4>Paris</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g3.jpg" alt="" />
									<figcaption>
										<h4>Thailand</h4>
									</figcaption>		
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g4.jpg" alt="" />
									<figcaption>
										<h4>Vietnam</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g5.jpg" alt="" />
									<figcaption>
										<h4>Sydney</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g6.jpg" alt="" />
									<figcaption>
										<h4>Maldives</h4>
									</figcaption>		
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g1.jpg" alt="" />
									<figcaption>
										<h4>Santorini</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g2.jpg" alt="" />
									<figcaption>
										<h4>Paris</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g3.jpg" alt="" />
									<figcaption>
										<h4>Thailand</h4>
									</figcaption>		
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g4.jpg" alt="" />
									<figcaption>
										<h4>Vietnam</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g5.jpg" alt="" />
									<figcaption>
										<h4>Sydney</h4>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-3 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-chico">
								<a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									<img src="images/g6.jpg" alt="" />
									<figcaption>
										<h4>Maldives</h4>
									</figcaption>		
								</a>
							</figure>
						</div>
					</div>
					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
				</div>
			</div>
		</div>
	<!-- //gallery -->
@endsection