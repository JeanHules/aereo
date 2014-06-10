var section_position = new Array();


$(document).ready(function() {
	$('.nav a').click(function(){
	if ($(window).width() < 1280) {
	   $.scrollTo( this.hash, 400, { easing:'swing'  , offset: {top:0} });
	}
	else {
	   $.scrollTo( this.hash, 400, { easing:'swing' , offset: {top:-33} });
	}
	});
});


$(document).ready(function() {
	$('.scrollto-btn').click(function(){
	if ($(window).width() < 1280) {
	   $.scrollTo( this.hash, 400, { easing:'swing'  , offset: {top:0} });
	}
	else {
	   $.scrollTo( this.hash, 400, { easing:'swing' , offset: {top:-33} });
	}
	});
});


  $(window).scroll(function() {
	  int = $(window).scrollTop();
	  section_register();
	  $(".nav-section").each(function(index) {
	  	if (int >= section_position[index]) {
		  	$('.'+$(this).attr('id')).addClass('active');
		  	$('.'+$(this).attr('id')).siblings().removeClass('active');
	  		}
	  	});
	  });
	  
	  function section_register() {
	  	$(".nav-section").each(function(index) {
	  		this_offset = $(this).offset();
	  
	  		if ($(this).attr('id')=='work') {
	  			section_position[index] = this_offset.top-150;
	  			} else {
	  			section_position[index] = this_offset.top - ($(window).height()*0.4);
	  			};
	  	});
	  
	  };