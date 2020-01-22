<?php
  	session_start();
  	include_once 'includes/dbh.inc.php';
  	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
  	<link rel="shortcut icon" type="img/png" href="img/fav.png">
  	<title>Sign Up - KWARA STATE POLYTECHNIC STUDENTS' FORUM</title>
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  	<!-- Bootstrap core CSS -->
  	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<!-- Material Design Bootstrap -->
  	<link href="css/mdb.min.css" rel="stylesheet">

  	<style type="text/css">
	  	body,
			html {
				margin: 0;
				padding: 0;
				height: 100%;
			}
			
			.user_card {
				height: 700px;
				width: 350px;
				margin-top: 65px;
				margin-bottom: 1px;
				position: relative;
				display: flex;
				justify-content: center;
				flex-direction: column;
				padding: 15px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 10px;

			}

			.brand_logo_container {
				position: absolute;
				height: 170px;
				width: 170px;
				top: -75px;
				border-radius: 50%;
				padding: 10px;
				text-align: center;
			}

			.kwara_poly_logo {
				height: 150px;
				width: 150px;
				border-radius: 50%;
				border: 2px solid white;
			}

			.form_container {
				margin-top: -40px;
			}

			.login_btn {
				width: 100%;
				background: green !important;
				color: white !important;
				border-radius: 5px;
			}

			.login_btn:focus {
				box-shadow: none !important;
				outline: 0px !important;
			}

			.login_container {
				padding: 2 10rem;
			}

			.input-group-text {
				background: green !important;
				color: white !important;
				border: 0 !important;
				border-radius: 0.25rem 0 0 0.25rem !important;
			}

			.input_user,
			.input_pass:focus {
				box-shadow: none !important;
				outline: 0px !important;
			}

			.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
				background-color: green !important;
			}

			.custom-control-label {
				font-family: tahoma;
				font-size: 15px;
			}

			.justify-content-center {
				font-family: tahoma;
				font-size: 15px;
				color: black;
			}

			.has-error .help-block{
            	color: red;
        	}
  	</style>
</head>
<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="index.php"><img src="img/logo1.png" class="kwara_poly_logo" alt="Logo" style="width: 150px; height: 150px"></a>
					</div>
				</div>

				<div class="d-flex justify-content-center form_container">
					<form class="signin-student" action="includes/signup.inc.php" id="login-form" method="POST" novalidate>
						<?php
				          	if (isset($_GET['invalidlogin'])) {
				          		$message = '<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">Invalid Login Details<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>';
				          		echo $message;
				          	}
          				?>
          				<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="fname" class="form-control input_user" placeholder="First Name" autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="lname" class="form-control input_user" placeholder="Last Name" autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="oname" class="form-control input_user" placeholder="Other Name" autofocus>
							</div>
						</div>
          				<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="matric" class="form-control input_user" placeholder="Matric No" autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="pwd" class="form-control input_pass" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="file" name="pass" class="form-control input_pass" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">I accept to the <a href="tc.php">Terms and Condition</a> </label>
							</div>
						</div>

						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="submit" class="btn login_btn">Sign In</button>
						</div>

						<div class="d-flex justify-content-center links">
							<a href="#">Forgot your password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

  	<!-- SCRIPTS -->
  	<!-- JQuery -->
  	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  	<!-- Bootstrap tooltips -->
  	<script type="text/javascript" src="js/popper.min.js"></script>
  	<!-- Bootstrap core JavaScript -->
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<!-- MDB core JavaScript -->
  	<script type="text/javascript" src="js/mdb.js"></script>

  	<!--Sign in Validation-->
    <script src="js/jquery.validate.min.js"></script>
  	<!-- START - If field empty script-->
    <script>
          $('#login-form').validate({
          rules:{
              uid:{required:true},
              pwd:{required:true}
          },
          messages:{
              uid:{required:"Username field required."},
              pwd:{required:"Password field required."}
          },
          errorClass: "help-block",
          errorElement: "strong",
          onfocus:true,
          onblur:true,
          highlight:function(element){
              $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
          },
          unhighlight:function(element){
              $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
          },
          errorPlacement:function(error, element){
              if(element.parent('.input-group').length)
              {   
                  error.insertAfter(element.parent());
                  return false;
              }
              else
              {
                  error.insertAfter(element);
                  return false;
              }
          }
      });
    </script>
    <!-- END - If field empty script-->

    <!-- START - This script below is to make invalid login to auto close-->
    <script>
    	window.setTimeout(function() {
		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
		        $(this).remove(); 
		    });
		}, 2000);
    </script>
    <!-- END - of invalid login to auto close-->
</body>
</html>