
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

});


//$('.collapse').collapse('hide');

