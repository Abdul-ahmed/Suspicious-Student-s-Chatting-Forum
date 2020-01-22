<?php
	session_start();

	if (!isset($_POST['post'])) {
		header("Location: ../kp-admin/anpost.php");
	} else {
		include_once 'dbh.inc.php';

		$title = mysqli_real_escape_string($myConn, $_POST['title']);
		$category = mysqli_real_escape_string($myConn, $_POST['category']);
		$year = mysqli_real_escape_string($myConn, $_POST['year']);
		$comment = mysqli_real_escape_string($myConn, $_POST['comment']);
		$author = ($_SESSION['u_id']);
		date_default_timezone_set('Africa/Lagos');
		$date = date("Y-m-d");
		$time = date("h:i:sa");

		if (empty($title)) {
			header("Location: ../kp-admin/anpost.php?title_empty");
		} elseif (empty($comment)) {
			header("Location: ../kp-admin/anpost.php?comment_empty");
		} else {

			$sql = "INSERT INTO allposts (title, category, year, comment, author, date, time) value ('$title', '$category', '$year', '$comment', '$author', '$date', '$time');";
			$query = mysqli_query($myConn, $sql);
			header("Location: ../kp-admin/anpost.php?post_successful");
		}
	}

	//Update
	// if (!isset($_POST['update'])) {
	// 	header("Location: ../kp-admin/anpost.php");
	// } else {
	// 	include_once 'dbh.inc.php';

	// 	$title = mysqli_real_escape_string($myConn, $_POST['title']);
	// 	$category = mysqli_real_escape_string($myConn, $_POST['category']);
	// 	$year = mysqli_real_escape_string($myConn, $_POST['year']);
	// 	$comment = mysqli_real_escape_string($myConn, $_POST['comment']);
	// 	$author = ($_SESSION['u_id']);
	// 	date_default_timezone_set('Africa/Lagos');
	// 	$date = date("Y-m-d");
	// 	$time = date("h:i:sa");

		
	// }