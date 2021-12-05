<?php
	$user_ID = $_POST["user_ID"];
	$post_content = $_POST["post_content"];
	$mysqli = new mysqli("mysql.eecs.ku.edu", "i317s920", "vo7sa4eP", "i317s920");
	if($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit(); 
	}
	$initial_query = "SELECT * FROM Users WHERE user_id = '{$user_ID}';";
	$userCheck = mysqli_query($mysqli, $initial_query);
	if(mysqli_num_rows($userCheck) == 1){
		if($post_content == NULL){
			echo "CANNOT BE POSTED. POST CONTENT IS EMPTY.";
		}
		else{
			$insert = "INSERT INTO Posts (author_id, content)
			VALUES('{$user_ID}', '{$post_content}')";
			if(mysqli_query($mysqli, $insert)){
			echo "Post was successfully created!";
			}
			else{
				echo $insert;
				echo "didn't work :(";
			}
		}
	}
	else{
		echo "CANNOT BE POSTED. USER DOESN'T EXIST";
	}
	$mysql->close();
?>