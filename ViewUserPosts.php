<html>
	<head>
		<title>VIEW USER POSTS</title>
	</head>
	<body>
		<p>Select a user:<p>
		<form action="ViewUserPosts2.php" method="post">
			<?php
			
			$mysqli = new mysqli("mysql.eecs.ku.edu", "i317s920", "vo7sa4eP", "i317s920");
			if($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit(); 
			}
			$query = "SELECT author_id FROM Posts";
			$result = mysqli_query($mysqli, $query);
			
			echo "<select name=\"author_id\">";
			while ($row = mysqli_fetch_array($result)){
				echo "<option value='" . $row['author_id'] . "'>" . $row['author_id'] . "</option>";
			}
			echo "</select>";
			
			?>
			<br><br>
			<input type="submit">
		</form>
	</body>
</html>