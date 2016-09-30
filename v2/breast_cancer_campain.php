<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<LINK REL="SHORTCUT ICON" HREF="/img/aris.ico">

<title>Aris</title>

<link rel=stylesheet href="style.css" type="text/css" media=screen>

<!--modal-->
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/jquery.reveal.js"  type="text/javascript"></script>
<link rel=stylesheet href="css/reveal.css" type="text/css" media=screen>


</head>
<body>

<!--encabezado-->
	<?php include "includes/header.php"; ?>
<!--encabezado-->


<div id="containerbody">

	<section class="schedule">
		<div class="row">

			<div class="content_schedule">

				<div class="title_schedule title_bca" >
                	<br>
					<img src="/img/bca_label.png">
				</div>

				<div class="line_schedule">
				</div>


				<div class="text_schedule">
                	<h1>BREAST CANCER CAMPAIGN</h1>
					<p>
						To Register your School for this Fundraise , ""<br>
                        Help your Health , Help your child's school" <br>
                        please fill out the following information:
					</p>

					<form action="">
						<span>School's name : <label class="c_red">*</</label></span>
						<input type="text" placeholder="Enter name" >

						<span>School's address: <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter Referral doctor and phone" >

						<span>School's phone number: <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter test / requested" >

						<span>Person to Contact at your school:  <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter phone number" >

						<span>Your name and phone number : <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter email address" >

						<span>Comments :   <label class="c_red">*</</label></span>
						<textarea name="" id="" cols="30" rows="6"  placeholder="Enter comments or questions" ></textarea>

						<button type="submit"  value="Submit" class="btnschedule">Submit</button>
					</form>

				</div>

			</div>

		</div>
		<!--<div class="row col-right">
			<div class="col-sm-offset-5 col-sm-6  col-md-offset-6 col-md-6 content-btn">
				<button type="submit"  value="Submit" class="btnschedule">Submit</button>
			</div>
		</div>-->
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


