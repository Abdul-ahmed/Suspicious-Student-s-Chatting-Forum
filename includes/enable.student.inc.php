<?php
	session_start();

	if (!isset($_GET['ena'])) {
		header("Location: ../kp-admin/disabledstudent.php");
	} else {

		include('dbh.inc.php');

		$student_id = $_GET['ena'];
		$insertinto = "INSERT INTO students (firstname, lastname, othername, matric, password, imagename, studentid) SELECT firstname, lastname, othername, matric, password, imagename, studentid FROM disabletable WHERE studentid='$student_id';";
		$result = mysqli_query($myConn, $insertinto);

		$delete = "DELETE FROM disabletable WHERE id='$student_id'";
		$result = mysqli_query($myConn, $delete);
		header("location: ../kp-admin/disabledstudent.php?");
	}
?>