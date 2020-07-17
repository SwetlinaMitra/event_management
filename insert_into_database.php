<?php
include "connection.php";
	$username	=$_REQUEST["name"];
	$phn_no		=$_REQUEST["phn_no"];
	$email		=$_REQUEST["email"];
	$event		=$_REQUEST["event"];
	//$status		=$_REQUEST["status"];
	if($event=="Event1")
	{
		$event="E1";
	}
	else if($event=="Event2")
	{
		$event="E2";
	}
	else if($event=="Event3")
	{
		$event="E3";
	}
	else if($event=="Event4")
	{
		$event="E4";
	}
	$random		=rand(1,1000000000);
	//$resourceQuery = mysqli_query($connection,$sql);
	echo $random;
	echo '<br>';
	$sql 		= "INSERT INTO participants(name, phnno, email, event_id, participant_id) VALUES ('$username','$phn_no','$email','$event','$random')";
	$resourceQuery = mysqli_query($connection,$sql);
	/*echo $username;
	echo "<br>";
	echo $phn_no;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $event;
	//echo $status;
	//echo "<br>";*/
?>
<html>
	<head>
		<title>Form Submission</title>
		<link rel="stylesheet" href="css\insert_into_database.css">
	</head>
	
	<body>
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
		<div style="width:50%; margin:0 auto;">
			<a href="http://localhost/conference/conference_home_page.php"><u>Go to home page</u></a>
		</div>
	</div>
	</body>
</html>