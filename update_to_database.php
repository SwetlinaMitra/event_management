<?php
include "connection.php";
	$username	=$_REQUEST["username"];
	$psw		=$_REQUEST["psw"];
	$email		=$_REQUEST["email"];
	$status		=$_REQUEST["status"];
	$sql 		= "UPDATE user_details SET password='$username',email='$email' WHERE name='$username' " ;
	$resourceQuery = mysql_query($sql);
	echo $username;
	echo "<br>";
	echo $psw;
	echo "<br>";
	echo $email;
	echo "<br>";
?>