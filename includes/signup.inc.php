<?php
	session_start();

	if (!isset($_POST['submit'])) {
		header("Location: ../signup.php");

	} else {
		include_once 'dbh.inc.php';

		$firstn = mysqli_real_escape_string($myConn, $_POST['fname']);
		$lastn = mysqli_real_escape_string($myConn, $_POST['lname']);
		$othern = mysqli_real_escape_string($myConn, $_POST['oname']);
		$matricno = mysqli_real_escape_string($myConn, $_POST['matric']);
		$password = mysqli_real_escape_string($myConn, $_POST['pwd']);
		$passport = mysqli_real_escape_string($myConn, "img/".$_POST['pass']);

		$sql = "INSERT INTO students (firstname, lastname, othername, matric, password, imagename) values ('$firstn', '$lastn', '$othern', '$matricno', '$password', '$passport');";
		

		if (mysqli_query($myConn, $sql)){
        // move_uploaded_file($_FILES['passupload']['tmp_name'], "img/$pass");
        	echo "<script>alert('Registration Successful'); </script>";
			header("Location: ../signin.php");
      	} else {
        	echo "<script>alert('Registration Not Successful'); </script>";
			header("Location: ../index.php");
      	}
	}