<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Pinoy Travelista - Dream. Explore. Discover.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
{{ HTML::style("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css") }}
<meta name="description" content="Pinoy Travelista is a Bicol Travel Agency founded in 2013 whose head office is in Legazpi City, Albay. We offer packages that will surely maximize the travel experience of our clients at a minimum cost. We want our travelers to have quality service that matches their needs and budget" />
<meta name="keywords" content="travel agency, pinoy travelista, travelista, tour, adventure" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
{{ HTML::style("css/bootstrap.css", array("media" => "all")) }}
<!--// bootstrap-css -->
<!-- css -->
{{ HTML::style("css/style.css", array("media" => "all")) }}

<!--// css -->
<!-- font -->
{{ HTML::style("//fonts.googleapis.com/css?family=Parisienne") }}
{{ HTML::style("//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic") }}
{{ HTML::style("//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900") }}
<!-- //font -->
{{ HTML::script('js/jquery-1.11.1.min.js') }}
{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/move-top.js') }}
{{ HTML::script('js/easing.js') }}
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script> 
<!--animate-->
{{ HTML::style('css/animate.css', array('media' => 'all')) }}
{{ HTML::script('js/wow.min.js') }}
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
</head>
<body>
  <!-- banner-top -->

<style>
body {
  font-family: 'Roboto', sans-serif;
  font-size: 1em;
  line-height: 1.4;
  height: 100%;
  
  margin: 0;

  padding: 0;

}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #fff;
}

ul.topnav li {float: right;}

ul.topnav li a {
  display: inline-block;
  color: #000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #2474e4;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: right;
  }
}
</style>
</head>
<body>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</head>
<body>
  
        <div class="header-top">
     <!--container-->
      <div class="container">
          <ul class="topnav" id="myTopnav">
          <div class="logo">
            <a href="/">{{ HTML::image('images/logo3.png', '', array('id' => 'section-1', 'class' => 'img-responsive')) }}</a>
            </div>
            <div class="menu">
			          <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
		   <li><a href="testimonials"><i class="fa fa-commenting"> Testimonials</a></li></i>
          <li><a href="contacts"><i class="fa fa-phone"> Contact Us</a></li></i>
          <li><a href="about"><i class="fa fa-info-circle">  About</a></li></i>
          <li><a href="top"><i class="fa fa-globe"> Tour Packages</a></li></i>          
            <li><a class="active" href="/"><i class="fa fa-home"> Home</a></li></i>
          
          </li>
        </div>
        </div>
        </div>

      

  <!-- banner-top -->
  <!-- banner -->
 <div class="banner">
		<div class="container">
			<div class="banner-grids">
				<div class="t-logo wow zoomIn animated animated" data-wow-delay=".5s">
					
				</div>
				<div class="banner-right">
					<div class="banner-top-right-text wow fadeInUp animated animated" data-wow-delay=".5s">
						<h2>Craving for Adventure?</h2>
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
						<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
						
						<div id="top" class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
									<div class="banner-right-info">
										<h3 class="wow fadeInUp animated animated" data-wow-delay=".5s">AVAIL NOW TO GET 20 % DISCOUNT ON SELECTED PACKAGES</h3>
										<div class="more-button wow fadeInUp animated animated" data-wow-delay=".5s">
											<a href="top">AVAIL ONE NOW!</a>
										</div>
									</div>
								</li>
								<li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
									<div class="banner-right-info">
										<h3>COME AND EXPLORE THE AMAZING BEAUTY OF THE PHILIPPINES</h3>
										<p></p>
										<div class="more-button">
											<a href="top">Click Here For More Info</a>
										</div>
									</div>
								</li>
							</ul><ul class="callbacks_tabs callbacks1_tabs"><li class="callbacks1_s1 callbacks_here"><a href="#" class="callbacks1_s1">1</a></li><li class="callbacks1_s2"><a href="#" class="callbacks1_s2">2</a></li></ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-navigation">
			<div class="container">
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<div class="container">
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
			</div>
		</div>
	</div>
  <!-- //banner -->

  @yield('content')


  <!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="footer-grids">
        <div class="footer-heading wow fadeInUp animated animated" data-wow-delay=".5s">
          <h3>Get in touch with us</h3>
        </div>
        <div class="footer-icons wow fadeInUp animated animated" data-wow-delay=".5s">
          <ul>
            <li><a href="#" class="twitter"></a><span>Twitter</span></li>
            <li><a href="#" class="twitter facebook"></a><span>Facebook</span></li>
            <li><a href="#" class="twitter chrome"></a><span>Google +</span></li>
            <li><a href="#" class="twitter dribbble"></a><span>Dribbble</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <!-- <div class="footer-nav wow fadeInRight animated animated" data-wow-delay=".5s">
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="codes.html">Codes</a></li>
          <li><a href="gallery2.html">Gallery</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div> -->
      <div class="copyright wow fadeInLeft animated animated" data-wow-delay=".5s">
        <p>© 2016 Pinoy Travelista . All Rights Reserved . Designed by Bicol University</p>
      </div>
    </div>
  </div>
  <!-- //footer -->
</body> 
</html>