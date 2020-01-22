<?php
	session_start();

	$sql = "SELECT * FROM allposts WHERE author = 'Admin';";
	$query = mysqli_query($myConn, $sql);
	$resultCheck = mysqli_num_row($query);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$title = $row['title'];
			echo $title;
		}
	}

