<?php
include "connection.php";
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
						
		//echo
		echo $participant_count;
		echo '<br>';
		echo $event_count;
		echo '<br>';
		echo $session_count;
		echo '<br>';
		echo $speaker_count;
		echo '<br>';
?>