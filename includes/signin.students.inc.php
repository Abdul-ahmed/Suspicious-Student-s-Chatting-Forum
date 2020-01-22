<?php
	session_start();

	if (!isset($_POST['submit'])) {
		header("Location: ../signin.php");
		exit();
		
	} else {
		
		include_once 'dbh.inc.php';

		$uid = mysqli_real_escape_string($myConn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($myConn, $_POST['pwd']);

		$sqlStmt = "SELECT * FROM students WHERE matric='$uid' AND password='$pwd'";
		$result = mysqli_query($myConn, $sqlStmt);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			header("Location: ../signin.php?invalidlogin");
			// $_SESSION['error'] = 'Sorry, no data was found';
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['matric'] = $row ['matric'];
				header("Location: ../feeds.php");
				exit();
			} else {
				header("Location: ../signin.php");
				exit();
			}
		}
	}