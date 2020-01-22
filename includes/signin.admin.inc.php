<?php
	session_start();

	if (!isset($_POST['submit'])) {

		header("Location: ../kp-admin");
		exit();
		
	} else {
		
		include_once 'dbh.inc.php';

		$uid = mysqli_real_escape_string($myConn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($myConn, $_POST['pwd']);

		$sqlStmt = "SELECT * FROM admin WHERE username='$uid' AND password='$pwd'";
		$result = mysqli_query($myConn, $sqlStmt);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			header("Location: ../kp-admin/index.php?invalidlogin");
			// $_SESSION['error'] = 'Sorry, no data was found';
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['u_id'] = $row ['username'];
				header("Location: ../kp-admin/dashboard.php");
				exit();
			} else {
				header("Location: ../kp-admin/index.php");
				exit();
			}
		}
	}