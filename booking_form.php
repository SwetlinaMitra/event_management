<?php
	
?>
<!-- removed required from all fields
Removed action = "insert into database" from form header-->
<html>
	<head>
		<!--<link rel="stylesheet" href="css\events_page.css">-->
		<link rel="stylesheet" href="css\booking_form.css">
		<script src="js\booking_form.js"></script>
		<title>Get your tickets</title>
	</head>
	
	<body>
	<div class="whole">
		<div class="navbar">
			<div class="head_tags">
				<div class="horizon_head">
					<h1>HORIZON</h1>
				</div>
				<!--<div>modify the dorpdown list -- >
					
				<!--div>-->
				<!--<h3 class="each_tag" onclick="display_events_list()"><br>Current Events</h3>-->
				<!--<h3 class="each_tag"><br>Past Events</h3>
					<h3 class="each_tag"><br>RSPV	</h3>
					<h3 class="each_tag"><br>Speakers</h3>
					<!--<h3 class="each_tag"><br>The conference</h3>-->
					<h3 class="each_tag"><br>Home	</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="form_body">
			<br><br><br>
			<h1>Event Registration Form</h1>
			<br><br><br>
			<div class="the_form">
				<form method="post" name= "form1" onsubmit=" return validate()">  <!--action="insert_into_database.php"-->
					<div class="colspan-25">
						<p>Enter your name</p>
					</div>
					<div class="colspan-75">
						<span>*</span><input type="text" name="name" placeholder="Your full name" maxlength="20" ></input>
					</div>
					
					<div class="clearfix"></div>
					<br><br><br><br>
					
					<div class="colspan-25">
						<p>Enter email ID</p>
					</div>
					<div class="colspan-75">
						<span>*</span><input type="email" name="email" placeholder="Your email" maxlength="250" ></input>
					</div>
					
					<div class="clearfix"></div>
					<br><br><br><br>
					
					<div class="colspan-25">
						<p>Enter your phone number</p>
					</div>
					<div class="colspan-75">
						<span>*</span><input type="tel" name="phn_no"placeholder="Your phone number" maxlength="10" ></input>
					</div>
					
					<div class="clearfix"></div>
					<br><br><br><br>
					
					<div class="colspan-25">
						<p>Select the event</p>
					</div>
					<div class="colspan-75">
						<span>*</span>
						<select name="event">
							<option>Event1</option>
							<option>Event2</option>
							<option>Event3</option>
							<option>Event4</option>
						</select>
					</div>
					
					<div class="clearfix"></div>
					<br><br><br><br>
					
					
					<div class="colspan-25">
						<p>Select your gender</p>
					</div>
					<div class="colspan-75">
						<span>*</span>
						<input type="radio" name="gender" value="male" checked> Male<br>
						<input type="radio" name="gender" value="female"> Female<br>
						<input type="radio" name="gender" value="other"> Other 
					</div>
					
					<div class="clearfix"></div>
					<br><br><br><br>
					
					
					<div class="colspan-25">
						<p>Select your interests</p>
					</div>
					<div class="colspan-75">
						<span>*</span>
						<input type="checkbox" name="vehicle1" value="Big Data"> Big Data <br>
						<input type="checkbox" name="vehicle2" value="MAchine Learning"> MAchine Learning <br>
						<input type="checkbox" name="vehicle3" value="IoT" checked> IoT<br>
					</div>
					
					<div class="clearfix"></div>
					<br><br><br><br>
					
					<input type="submit" style="width:25%; margin:0 auto; height:50px;"></input>
				</form>
			</div>
		</div>
		
		
	</div>
	<script>
		
	</script>
	</body>
</html>