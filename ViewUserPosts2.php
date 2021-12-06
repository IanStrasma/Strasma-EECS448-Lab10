<?php
	$author = $_POST["author_id"];
	$mysqli = new mysqli("mysql.eecs.ku.edu", "i317s920", "vo7sa4eP", "i317s920");
	if($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit(); 
	}
	$query = "SELECT content FROM Posts WHERE author_id = ' ${author} ';";
	$result = mysqli_query($mysqli, $query);
    while($row= mysqli_fetch_assoc($result)){
		echo($row['content']);
	}
	$mysql->close();
?>