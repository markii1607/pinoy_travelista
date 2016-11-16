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
body {margin:0;}
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

  
  
        <div class="header-top">
     <!--container-->
      <div class="container">
          <ul class="topnav" id="myTopnav">
          <div class="logo">
            <a href="/"><img src="images/logo2.png" id="section-1" class="img-responsive" alt=""/></a>
            </div>
            <div class="menu">
          <li><a href="contact"><i class="fa fa-phone"> Contact Us</a></li></i>
          <li><a href="about"><i class="fa fa-list"> About</a></li></i>
          <li><a href="#news"><i class="fa fa-globe"> Top Attractions</a></li></i>          
            <li><a class="active" href="/"><i class="fa fa-home"> Home</a></li></i>
          
          <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
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
          <div class="banner-left">
            
          </div>
        </div>
        <div class="banner-right">
          <div class="banner-top-right-text wow fadeInUp animated animated" data-wow-delay=".5s">
            <h2>CRAVING FOR ADVENTURE?</h2>
          </div>
          <div class="banner-right-top">
            {{ HTML::script('js/responsiveslides.min.js') }}
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
                  </div>
                </li>
                <li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                  <div class="banner-right-info">
                    <h3>Enjoy your stay!</h3>
                    <p>Dolor lorem ipsum sit amet consectetur adipiscing elit duis convallis erat est a euismod justo fringilla ut vestibulum a magna tempus sapien consequat gravida.</p>
                  </div>
                </li>
                <li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                  <div class="banner-right-info">
                    <h3>Wonderful Philippines</h3>
                    <p>Dolor lorem ipsum sit amet consectetur adipiscing elit duis convallis erat est a euismod justo fringilla ut vestibulum a magna tempus sapien consequat gravida.</p>
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