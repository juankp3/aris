<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aris</title>

<link rel=stylesheet href="style.css" type="text/css" media=screen>

<!--modal-->
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/jquery.reveal.js"  type="text/javascript"></script>
<link rel=stylesheet href="css/reveal.css" type="text/css" media=screen>


<!--links-->
<script>
$( document ).ready(function() {

	$("nav ul li a").click(function() {
		var id = $(this).data('id');
		if(id){
			 $('html, body').animate({
			        scrollTop: $("."+id).offset().top
			    }, 500);
		}
		
	});

});
</script>

<!--acordeon-->
<script>
$( document ).ready(function() {

	$("#accordion a").click(function(){
		$("#accordion .panel-heading").removeClass('active');
		$(this).parent().parent().addClass('active');
	});

});

</script>

<!--scroll-->
<script>
$( document).ready(function() {
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

</script>

<!--Info-->
<script type='text/javascript' src='js/info-tour.js'></script>


</head>
<body>

<!--encabezado-->
	<?php include "includes/header.php"; ?>
<!--encabezado-->


<div id="containerbody">

	<a class="home" name="home"></a>
	<section class="home">
		<div class="text">
			We are a Portable Diagnostic Imaging Company with cutting edge technology that provides Digital X-Ray, ultrasound, EKG and Holter monitor services at the comfort of the patient's home, nursing homes, physician's offices, correctional centers, etc.
		</div>


		<div class="content_pc">

			<ul class="slides_container">
				<li><img  src="img/fotopc01.jpg" alt=""></li>
				<li><img  src="img/fotopc02.jpg" alt=""></li>
				<li><img  src="img/fotopc03.jpg" alt=""></li>
			</ul>

		</div>

	</section>

	<a class="about" name="about"></a>
	<section  class="about">
		<div class="row">
			<h1>About us</h1>
			<div id="des_about">
				<p>
					Aris Mobile X-Ray have a full range of portable diagnostic imaging services to fulfill your needs.
					<br><br>
					We employs highly qualified Board Certified Radiologist, Board certified Cardiologist and Certified Radiology Technologist (ARRT) (ARDM). Our commitment is to provide you with the highest quality imaging service.
					<br><br>
					Our caring team upholds the highest moral and ethical standards and we treat our patients with love and care offering them an exceptional level of comfort. We pride ourselves on quality service, speed and efficiency on all our mobile imaging services.
				</p>


			</div>
		</div>
		<img src="/img/about.jpg" width="100%">
	</section>

	<a class="services" name="services"></a>
	<section class="services">
		<div class="row">
			<div id="content_text_service">
				<h1>Services</h1>
				<div>24 hours a days, 7 days a week and 365 days a year including major holidays.</div>
			</div>


			<div id="imgs_service">
				<!--<img src="img/services.jpg" alt="">-->

            	<div class="item_serv">

            		<div class="title">
            			<H1>X-RAYS</H1>
            		</div>


	                <div class="tooltip-ico">

	                    <div class="tooltip">
	                		<br><br><br><br>
	                    	<img src="img/imgs_service_1-small.png">                
	                        <H1>X-RAYS</H1>
	                        
	                        <p>All general X-Rays</p>
	                    </div>

	                </div><!--tooltip-ico-->

				</div><!--item_serv-->

            	<div class="item_serv">

            		<div class="title">
            			<H1>ULTRASOUNDS</H1>                    
            		</div>

	                <div class="tooltip-ico">
	                    	
                    	<div class="tooltip">
	                    	<img src="img/imgs_service_2-small.png">                
	                        <H1>ULTRASOUNDS</H1>
	                        
	                        <ul>

							   <li>Pelvis ultrasound</li>
							   <li>Soft tissue</li>
							   <li>Intravaginal</li>
							   <li>Gestational</li>
							   <li>Echocardiogram </li>
							   <li>Thyroid</li>
							   <li>Abdomen retroperitoneo</li>
							   <li>Vascular studies (Doppler)</li>

	                        </ul>
	                    </div>
	                
	                </div><!--tooltip-ico-->

				</div><!--item_serv-->

            	<div class="item_serv">

            		<div class="title">
            			<H1>EKG, HOLTER <br>MONITOR</H1>
            		</div>

	                <div class="tooltip-ico">
	                    	
                    	<div class="tooltip">
	                    	<img src="img/imgs_service_3-small.png">                
	                        <H1>EKG, HOLTER <br>MONITOR</H1>
	                        
	                        <p>We provide our clients with superior management of cardiac test procedures via a proprietary internet-based application.</p>
	                    </div>
	                
	                </div><!--tooltip-ico-->

				</div><!--item_serv-->

            	<div class="item_serv">

            		<div class="title">
            			<H1>BONE<br>DENSITOMETRY</H1>                    
            		</div>

	                <div class="tooltip-ico">
	                    	
                    	<div class="tooltip">
	                    	<img src="img/imgs_service_4-small.png">                
	                        <H1>BONE<br>DENSITOMETRY</H1>
	                        
	                        <p>A Bone densitometry test  will give you a exactly measurement of your bone density to rule out the possibility of a risk of bone fractures due to Osteoporosis or osteopenia. We use Periphreal DXA scan  or the wrist.</p>
	                    </div>
	                
	                </div><!--tooltip-ico-->

				</div><!--item_serv-->

            	<div class="item_serv">

            		<div class="title">
            			<H1>PRE-OPERATIVE<br>SERVICES</H1>                    
            		</div>

	                <div class="tooltip-ico">
	                
                    	<div class="tooltip">
	                    	<img src="img/imgs_service_5-small.png">                
	                        <H1>PRE-OPERATIVE<br>SERVICES</H1>
	                        
	                        <p>Include:</p>
	                        <br>
	                        <ul>
	                        	<li>Digital Chest X-Ray</li>
	                        	<li>Electrocardiogram</li>
	                        	<li>Blood Work: Prothrombin Time on Blood (PT)</li>

	                        </ul>
	                    </div>
	                
	                </div><!--tooltip-ico-->

				</div><!--item_serv-->

			</div>
		</div>
	</section>

</div><!--containerbody-->

<!--pie de pagina-->
	<?php include "includes/footer.php"; ?>
<!--pie de pagina-->


<!--modal-->
	<?php include "includes/modal.php"; ?>
<!--modal-->
</body>
</html>

<!--slider-->
<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/slider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="js/slider/jquery.bxslider.css" rel="stylesheet" />

<script>
$(document).ready(function(){
  $('.slides_container').bxSlider({
  	auto: true,
  	controls: false,
  	pager:false,
  	slideWidth:557,

});

});

</script>


<!--scroll-->
<script src="js/jquery.nicescroll.min.js"  type="text/javascript"></script>
