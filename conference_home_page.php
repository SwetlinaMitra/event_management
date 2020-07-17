<?php
	include 'connection.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="css\conference_home_page.css">
		<script src="js\conference_home_page.js"></script>
		<title>Main Page</title>
	</head>
	<style>
		a{
			text-decoration:none;
		}
	</style>
	<body>
	<div class="whole">
		<div class="navbar">
			<div class="head_tags">
				<div class="horizon_head">
					<h1>HORIZON</h1>
				</div>
				<div class="dropdown">
					<a href="http://localhost/conference/events_page.php">
						<h3 class="each_tag" onclick="display_events_list()"><br>Current Events</h3>
					</a>
						<select class="dropdown-content event_list" id="event_list">
							<option class="every_event">Event1</option>
							<option class="every_event">Event2</option>
							<option class="every_event">Event3</option>
							<option class="every_event">Event4</option>
						</select>
				</div>
				<a href="conference_home_page.php#past_events">
					<h3 class="each_tag"><br>Past Events</h3>
				</a>
				<a href="conference_home_page.php#rsvp">
					<h3 class="each_tag"><br>RSPV	</h3>
				
				</a><a href="conference_home_page.php#speakers">
					<h3 class="each_tag"><br>Speakers</h3>
				</a>
				<!--<h3 class="each_tag"><br>The conference</h3>-->
				<h3 class="each_tag"><br>Home	</h3>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="home"></div>
			<div class="intro">
				<h2>Horizon Conference.</h2>
				<h2>The Challenges of Business Innovation</h2>
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
		
		<br><br><br><br>
		<div class="the_conference">
			<h2>The Conference</h2>
			<div class="the_conference_elements">
				<hr>
				<span class="date conference_elements" style="width:40%">Two days of powerful talk</span>
				<span class="date conference_elements" style="width:25%">03 April 2014</span>
				<span class="date conference_elements" style="width:15%">9:00 am</span>
				
				<br><br><br><br><br><br>
				<p>
				I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.​ This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.
				<br><br>
				<br>
				Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
				</p>
				<a href="conference_home_page.php#speakers">
					<div class="conference_elements speaker_navigate cursor" style="">&#8595 Speakers</div>
				</a>
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="about home">
			<div class="intro alter_img">
				<h2>About Horizon</h2>
				<!--<h2>The Challenges of Business Innovation</h2>-->
				<hr>
				<p>	What is Horizon?
					I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services.
				</p>
			</div>
		</div>
		
		<div class="count_home home">
			<br><br>
			<div class="count">
				<table>
					<?php
						$sql = "SELECT * FROM participants";
						$resourceQuery = mysqli_query($connection,$sql);
						$participant_count = mysqli_num_rows($resourceQuery);
						
						$sql = "SELECT * FROM events";
						$resourceQuery = mysqli_query($connection, $sql);
						$event_count = mysqli_num_rows($resourceQuery);
						
						$sql = "SELECT SUM(DATEDIFF(end_date, start_date)) AS difference FROM events";
						$resourceQuery = mysqli_query($connection, $sql);
						$row = mysqli_fetch_assoc($resourceQuery);
						$session_count = $row["difference"];
						
						$sql = "SELECT * FROM events";
						$resourceQuery = mysqli_query($connection, $sql);
						$speaker_count = mysqli_num_rows($resourceQuery);
						?>
					<tr>
						<th><?php echo $participant_count;?></th>
						<th><?php echo $event_count;?></th>
						<th><?php echo $session_count;?></th>
						<th><?php echo $speaker_count;?></th>
					</tr>
					
					<tr>
						<td>Participants</td>
						<td>Topics</td>
						<td>Session</td>
						<td>Speakers</td>
					</tr>
				</table>
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<a name="speakers">
		<div class="speakers home" id="speakers">
			<div class="intro"style="width:70%">
				<h2>Speakers</h2>
				<!--<h2>The Challenges of Business Innovation</h2>-->
				<hr>
				<p style="font-size:20px;">Proud to bring inspirational speakers from across the globe<p>
				<div class="each_speaker">
					<img src="smiley.jpg">
				</div>
				
				<div class="each_speaker">
					<img src="smiley.jpg">
				</div>
				
				<div class="each_speaker">
					<img src="smiley.jpg">
				</div>
				
			</div>
		</div>
		</a>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<div class="sponsors home">
			<div class="intro"style="width:70%">
				<h2>Sponsors</h2>
				<!--<h2>The Challenges of Business Innovation</h2>-->
				<hr>
				
			</div>
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<a name="past_events">
		<div class="speakers home" style="height:1300px;" id="past_events">
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
		</a>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!--<br>--><br>
		<a name="rsvp">
		<div class="sponsors home" id="rsvp">
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
		</a>
		
	</div>
	</body>
</html>