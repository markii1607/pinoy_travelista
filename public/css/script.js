jQuery(document).ready(function(){
	
	var navOffset = jQuery("nav").offset().top;
	
	jQuery(window).scroll(function(){
		
		var scrollPos = jQuery(window).scrollTop();
		jQuery(".status").html(scrollPos);
	});

});