<?php

	$conn = mysqli_connect(
	    'localhost:3300',
        'root',
        '12345',
        'bank',
    );

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>