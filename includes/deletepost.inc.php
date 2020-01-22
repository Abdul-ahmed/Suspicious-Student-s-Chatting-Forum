<?php
	session_start();

	if (!isset($_GET['id'])) {
		header("Location: ../kp-admin/allpost.php");
	} else {

		include('dbh.inc.php');

		$post_id = $_GET['id'];
		$delete = "DELETE FROM allposts WHERE id='$post_id'";
		$result = mysqli_query($myConn, $delete);
		header("location: ../kp-admin/allpost.php");
	}
?>