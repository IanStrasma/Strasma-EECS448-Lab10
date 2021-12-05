<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "i317s920", "vo7sa4eP", "i317s920");
	if($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit(); 
	}
	$query = "SELECT * FROM Users";
	$result = mysqli_query($mysqli, $query);
	
	$number_of_rows = mysqli_num_rows($result);
	if ($number_of_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row["user_id"] . "<br>";
		}
	} 
	else {
		echo "No Users";
	}
	
	$mysql->close();
?>