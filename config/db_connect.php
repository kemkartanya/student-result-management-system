<?php

	// connect to database
	$conn = mysqli_connect('localhost', 'tanya', 'tanya132', 'srms');

	// connection check
	if(!$conn){
		echo 'Connection Error: ' . mysqli_connec_error();
	}

?>