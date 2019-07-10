<?php
	//make connection with database
	$link = mysqli_connect("db4free.net","ssweety","password","sweetblue");
	// Check connection
	if($link === false) {
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
