
$( document ).ready(function() {

	$("nav ul li a").click(function() {
		var id = $(this).data('id');
		if(id){
			 $('html, body').animate({
			        scrollTop: $("."+id).offset().top
			    }, 500);
		}
		
	});

	$("#accordion a").click(function(){
		$("#accordion .panel-heading").removeClass('active');
		$(this).parent().parent().addClass('active');
	});

	/**
	$("#des_about").niceScroll({
	    	cursorcolor:"#F11313",
		cursorborderradius:"5px"
	    });
	**/
    $("#des_about").niceScroll({
    	touchbehavior:false,
    	cursorborder: "1px solid #0f71b8",
    	cursorcolor:"#0f71b8",
    	cursoropacitymax:0.7,
    	cursorwidth:1,
    	background:"#999999",
    	autohidemode:false
    });
});





//$('.collapse').collapse('hide');

