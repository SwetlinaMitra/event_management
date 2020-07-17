<?php
	include 'connection.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="css\events_page.css">
		<script src="js\conference_home_page.js"></script>
		<title>All Events Page</title>
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
					<a href="http://localhost/conference/conference_home_page.php">
						<h3 class="each_tag"><br>Home	</h3>
					</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="home"></div>
			<div class="intro">
				<h2>
				<?php
						$sql = "SELECT topic FROM events WHERE event_id='E1'";
						$resourceQuery = mysqli_query($connection,$sql);
						$row = mysqli_fetch_array($resourceQuery);
						echo $row["topic"];
					?>
					</h2>
				<h2><TAGLINE></h2>
				<hr>
				<div class="date">
					<span class="text"><b>
					<?php
						$sql = "SELECT start_date FROM events WHERE event_id='E1'";
						$resourceQuery = mysqli_query($connection,$sql);
						$row = mysqli_fetch_array($resourceQuery);
						echo $row["start_date"];
					?>
					</b><span>
				</div>
				<div class="place">
					<span class="text"><b>
					<?php
						$sql = "SELECT venue FROM events WHERE event_id='E1'";
						$resourceQuery = mysqli_query($connection,$sql);
						$row = mysqli_fetch_array($resourceQuery);
						echo $row["venue"];
					?>
					</b><span>
				</div>
				<div class="button text cursor">
					<a href="http://localhost/conference/booking_form.php">
						<button class="button cursor">Get Tickets</button>
					</a>
				</div>
			</div>
		
		<br><br><br><br>
		<div class="the_conference">
			<div class="the_conference_elements">
				<h2>***Event2****</h2>
				<h2><TAGLINE></h2>
				<hr>
				<div class="date">
					<span class="text"><b>03 April 2014</b><span>
				</div>
				<div class="place">
					<span class="text"><b>San Francisco</b><span>
				</div>
				<div class="button text cursor">
					<button class="button cursor" style="border:2px solid black; padding:10px">Get Tickets</button>
				</div>
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="about home">
			<div class="intro alter_img">
				<h2>***Event3****</h2>
				<h2><TAGLINE></h2>
				<hr>
				<div class="date">
					<span class="text"><b>03 April 2014</b><span>
				</div>
				<div class="place">
					<span class="text"><b>San Francisco</b><span>
				</div>
				<div class="button text cursor">
					<button class="button cursor" style="border 2px solid black">Get Tickets</button>
				</div>
			</div>
		</div>
		
		<!--<div class="count_home home">
			<br><br>
			<div class="count">
				<table>
					<tr>
						<th>930</th>
						<th>250</th>
						<th>40</th>
						<th>60</th>
					</tr>
					
					<tr>
						<td>Participants</td>
						<td>Topics</td>
						<td>Session</td>
						<td>Speakers</td>
					</tr>
				</table>
			</div>
		</div>-->
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="speakers home">
			<div style="width:50%; margin:0 auto;">
				<h2>***Event4****</h2>
				<h2><TAGLINE></h2>
				<hr>
				<div class="date">
					<span class="text"><b>03 April 2014</b><span>
				</div>
				<div class="place">
					<span class="text"><b>San Francisco</b><span>
				</div>
				<div class="button text cursor">
					<button class="button cursor">Get Tickets</button>
				</div>
				
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="sponsors home">
			<div class="intro"style="width:70%">
				<h2>Sponsors</h2>
				<!--<h2>The Challenges of Business Innovation</h2>-->
				<hr>
				
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="speakers home" style="height:1300px;">
			<div class="intro"style="width:70%">
				<h2>Past Events</h2>
				<!--<h2>The Challenges of Business Innovation</h2>-->
				<hr>
				<div class="each_event">
					<img src="events.png">
				</div>
				
				<div class="each_event">
					<img src="events.png">
				</div>
				
				<div class="each_event">
					<img src="events.png">
				</div>
				
				<div class="each_event">
					<img src="events.png">
				</div>
				
				<div class="each_event">
					<img src="events.png">
				</div>
				
				<div class="each_event">
					<img src="events.png">
				</div>
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="sponsors home">
			<div class="intro"style="width:70%">
				<h2>RSVP</h2>
				<!--<h2>The Challenges of Business Innovation</h2>-->
				<hr>
				<div class="rsvp_next_event">
					<p>RSVP for our next event. See you soon!<p>
					<div class="cursor">
					<button class="button cursor">Get Tickets</button>
					</div>
				</div>
				
				<div class="subscribe">
					<p>Subscribe to get news on all upcoming events </p>
					<br>
					<input type="text" class="textbox" placeholder="Enter email address"/>
					<br><br>
					<button class="button cursor">Subscribe</button>
				</div>
			</div>
		</div>
		
	</div>
	<script>
		
	</script>
	</body>
</html>