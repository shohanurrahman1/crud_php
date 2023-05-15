<?php  
	$db = mysqli_connect("localhost", "root", "", "crud");

	if ($db) {
		// echo "Ok";
	}
	else{
		die("Connection Failed!") .mysqli_error($db);
	}
?>