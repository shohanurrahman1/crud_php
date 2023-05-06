<?php  
	$db = mysqli_connect("localhost", "root", "", "crud");

	if ($db) {
		// echo "Ok";
	}
	else{
		echo "Database Connection Failed";
	}
?>