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

				<div class="title_schedule" >
					<h1 >SCHEDULE & APPOINTMENT</h1>
				</div>

				<div class="line_schedule">
				</div>


				<div class="text_schedule">
					<p>
						Call us today for a consultation, and see
						what our commitment to quality is all about!
					<br><br>
						For an appointment, please fill out this form
						or call us at  <b>1 - 800 - XRAY - 114</b>
					</p>

					<form action="">
						<span>Patient Last Name / First Name <label class="c_red">*</</label></span>
						<input type="text" placeholder="Enter name" >

						<span>Referral Doctor and Phone Number <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter Referral doctor and phone" >

						<span>Study Requested <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter test / requested" >

						<span>Phone Number <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter phone number" >

						<span>Email <label class="c_red">*</</label></span>
						<input type="text"  placeholder="Enter email address" >
						<input type="checkbox" id="chk1" name="chk1"> <label for="chk1">Check here to receive email updates</label>

						<span>Comment / Questions <label class="c_red">*</</label></span>
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


