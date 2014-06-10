(function( $ ){ 
	$(document).ready(function(){
		// global vars
		var header = $('.slidesjs-slide');
		var HeaderWrap = $('#slides li .container');
		var whole = $('.content');
		var windowScroll;
		
		
		$(window).scroll(function(){
			headingParallax();
		});
		
		
		function headingParallax() {
		  // how much have we scrolled?
		  windowScroll = $(window).scrollTop();

		  
		  // parallax then fade out
		  HeaderWrap.css({
			  'margin-top' : -(windowScroll/2)+"px",
			  'opacity' : 1-(windowScroll/200)
		  });
		  
		   // parallax then fade out
		  whole.css({
			  'margin-top' : -(windowScroll/2)+"px"
		  });
		
		 // parallax background image
		 header.css({
			 'background-position' : 'center' + (windowScroll/100)+"px"
		 });
	        }
	        return false;
	});

})( jQuery );