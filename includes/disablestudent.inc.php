<?php
	session_start();

	if (!isset($_GET['disa'])) {
		header("Location: ../kp-admin/allstudents.php");
	} else {

		include('dbh.inc.php');

		$student_id = $_GET['disa'];
		$insertinto = "INSERT INTO disabletable (firstname, lastname, othername, matric, password, imagename, studentid) SELECT firstname, lastname, othername, matric, password, imagename, id FROM students WHERE id='$student_id';";
		$result = mysqli_query($myConn, $insertinto);

		$delete = "DELETE FROM students WHERE id='$student_id'";
		$result = mysqli_query($myConn, $delete);
		header("location: ../kp-admin/allstudents.php?successful");
	}
?>