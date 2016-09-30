$(document).ready(function(){

$(".tooltip-ico").hover(
  function() {
    $( this ).find( ".tooltip" ).fadeIn( 500 );
  }, function() {
    $( this ).find( ".tooltip" ).fadeOut( 100 );
  }
);

	 
});