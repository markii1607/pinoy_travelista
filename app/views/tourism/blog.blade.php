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
	<!-- blog -->
	<div class="blog">
		<!-- container -->
		<div class="container">
			<div class="blog-info wow fadeInDown animated animated" data-wow-delay=".5s">
				<h2>Our Blog</h2>
			</div>
			<div class="blog-top-grids">
				<div class="col-md-8 blog-top-left-grid">
					<div class="left-blog">
						<div class="blog-left">
							<div class="blog-left-left wow fadeInRight animated animated" data-wow-delay=".5s">
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								<a href="single"><img src="images/8.jpg" alt="" /></a>
							</div>
							<div class="blog-left-right wow fadeInRight animated animated" data-wow-delay=".5s">
								<a href="single">Phasellus ultrices tellus eget ipsum ornare molestie </a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
								dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
								fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
								estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
							</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-left">
							<div class="blog-left-left wow fadeInRight animated animated" data-wow-delay=".5s">
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								<a href="single"><img src="images/9.jpg" alt="" /></a>
							</div>
							<div class="blog-left-right wow fadeInRight animated animated" data-wow-delay=".5s">
								<a href="single">Phasellus ultrices tellus eget ipsum ornare molestie</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
								dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
								fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
								estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet.
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-left">
							<div class="blog-left-left wow fadeInRight animated animated" data-wow-delay=".5s">
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								<a href="single"><img src="images/10.jpg" alt="" /></a>
							</div>
							<div class="blog-left-right wow fadeInRight animated animated" data-wow-delay=".5s">
								<a href="single">Phasellus ultrices tellus eget ipsum ornare molestie</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
								dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
								fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
								estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<nav>
						<ul class="pagination wow fadeInRight animated animated" data-wow-delay=".5s">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-md-4 blog-top-right-grid">
					<div class="Categories">
						<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Categories</h3>
						<ul>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">Phasellus sem leo, interdum quis risus</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#"> Donec condimentum purus urna venenatis</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">Cum sociis natoque penatibus et magnis</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">Suspendisse nec magna id ex pretium</a></li>
						</ul>
					</div>
					<div class="Categories">
						<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Archive</h3>
						<ul class="marked-list offs1">
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">May 2015 (7)</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">April 2015 (11)</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">March 2015 (12)</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">February 2015 (14)</a> </li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">January 2015 (10)</a></li>    
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">December 2014 (12)</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">November 2014 (8)</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">October 2014 (7)</a> </li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">September 2014 (8)</a></li>
							<li class="wow fadeInLeft animated animated" data-wow-delay=".5s"><a href="#">August 2014 (6)</a></li>                          
						</ul>
					</div>
					<div class="comments">
						<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Recent Comments</h3>
						<div class="comments-text wow fadeInLeft animated animated" data-wow-delay=".5s">
							<div class="col-md-3 comments-left">
								<img src="images/t1.jpg" alt="" />
							</div>
							<div class="col-md-9 comments-right">
								<h5>Admin</h5>
								<a href="#">Phasellus sem leointerdum risus</a> 
								<p>March 16,2014 6:09:pm</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="comments-text wow fadeInLeft animated animated" data-wow-delay=".5s">
							<div class="col-md-3 comments-left">
								<img src="images/t2.jpg" alt="" />
							</div>
							<div class="col-md-9 comments-right">
								<h5>Admin</h5>
								<a href="#">Phasellus sem leointerdum risus</a> 
								<p>March 16,2014 6:09:pm</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="comments-text wow fadeInLeft animated animated" data-wow-delay=".5s">
							<div class="col-md-3 comments-left">
								<img src="images/t3.jpg" alt="" />
							</div>
							<div class="col-md-9 comments-right">
								<h5>Admin</h5>
								<a href="#">Phasellus sem leointerdum risus</a> 
								<p>March 16,2014 6:09:pm</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //blog -->
@endsection