
$( document ).ready(function() {

	$("#menu_list a").click(function() {
		var id = $(this).data('id');
		if(id){
			 $('html, body').animate({
			        scrollTop: $("."+id).offset().top
			    }, 500);
		}
		
	});

});


//$('.collapse').collapse('hide');

