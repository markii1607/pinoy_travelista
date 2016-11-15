<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>{{ $title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Traverse Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
{{ HTML::style("css/bootstrap.css", array('media' => 'all')) }}
<!--// bootstrap-css -->
<!-- css -->
{{ HTML::style("css/style.css", array('media' => 'all')) }}
{{ HTML::style("css/lightbox.css") }}
<!--// css -->
<!-- font -->
{{ HTML::style("//fonts.googleapis.com/css?family=Parisienne") }}
{{ HTML::style("//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic") }}
{{ HTML::style("//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900") }}
<!-- //font -->
{{ HTML::script("js/jquery-1.11.1.min.js") }}
{{ HTML::script("js/bootstrap.js") }}
{{ HTML::script("js/move-top.js") }}
{{ HTML::script("js/easing.js") }}
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script> 

<script>
$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 280) {
      $('#nav_bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 281) {
      $('#nav_bar').removeClass('navbar-fixed');
    }
  });
});
</script>

<!--animate-->
{{ HTML::style("css/animate.css", array('media' => 'all')) }}
{{ HTML::script("js/wow.min.js") }}

  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
</head>
<body>
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
        <div class="footer-nav wow fadeInRight animated animated" data-wow-delay=".5s">
          <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="codes.html">Codes</a></li>
            <li><a href="gallery2.html">Gallery</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="copyright wow fadeInLeft animated animated" data-wow-delay=".5s">
          <p>© 2016 Traverse . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
      </div>
    </div>
    <!-- //footer -->
</body>
</html>