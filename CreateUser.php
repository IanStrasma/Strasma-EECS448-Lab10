<?php
	$user_ID = $_POST["user_ID"];
	$mysqli = new mysqli("mysql.eecs.ku.edu", "i317s920", "vo7sa4eP", "i317s920");
	if($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit(); 
	}
	$insert = "INSERT INTO Users (user_id)
	VALUES('{$user_ID}')";
	if(mysqli_query($mysqli, $insert)){
		echo "User was Successfully Created!";
	}
	else{
		echo "Unable to Succesfully Create User.";
	}
	$mysql->close();
?>