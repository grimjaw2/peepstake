<?php
	$con=mysqli_connect("localhost","root","","psdb");
	
	
	if(!$con)
	{
		die("connection error ".mysqli_connect_error());
	}
	
?>