<!DOCTYPE html>
<?php
require_once('admin/conn.php');
session_start();
	if (isset($_REQUEST['email'])){
			// removes backslashes
			$email = trim($_REQUEST['email']);
			$firstname = trim($_REQUEST['fnm']);
			$lastname = trim($_REQUEST['lnm']);
			$gender = trim($_REQUEST['gender']);
			$password = trim($_REQUEST['pwd']);
			$confpassword = trim($_REQUEST['confirmpwd']);
			$contactno = trim($_REQUEST['contact']);
			$addr1 = trim($_REQUEST['add1']);
			$addr2 = trim($_REQUEST['add2']);
			$addr3 = trim($_REQUEST['add3']);
			if( $password !=$confpassword){
				header("Location: registration.php");
			}else{
				$query = "INSERT INTO `user_reg`(`fname`, `lname`, `gender`, `contact`, `email`, `password`, `add1`, `add2`, `add3`)
				VALUES ('$firstname','$lastname','$gender','$contactno','$email','".md5($password)."','	$addr1','	$addr2','	$addr3')";
				$result = mysqli_query($link,$query);
				if($result){
					$_SESSION['email'] = $email;
					// Redirect user to index.php
					header("Location: userhome.php");
				}else{
					header("Location: registration.php");
				}
			}
	}else{

?>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Namit Kadia - Art Gallery</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">Namit Kadia</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Registration</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">Login</a>
					</li>
				
					
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

<div class="row">
			 <div class="col-lg-8 mb-4">
				 <h3>Registration</h3>
				 <form id="registrationForm" method="post" novalidate>
				 	<div class="control-group form-group">
						 <div class="controls">
							 <label>Firstname:</label>
							 <input type="text" class="form-control" name="fnm" id="fnm" required data-validation-required-message="Please enter your firstname.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Lastname:</label>
							 <input type="text" class="form-control" name="lnm" id="lnm" required data-validation-required-message="Please enter your lastname.">
							 
						 </div>
					 </div>


					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Email:</label>
							 <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Password:</label>
							 <input type="text" class="form-control" name="pwd" id="pwd" required data-validation-required-message="Please enter your password.">
							 
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Confirm Password:</label>
							 <input type="text" class="form-control" name="confirmpwd" id="confirmpwd" required data-validation-required-message="Please enter confirm password.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Gender:</label>
							 <div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="gender" value="Male" checked="checked">Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
						</div>
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Contact No:</label>
							 <input type="text" class="form-control" name="contact" id="contact" required data-validation-required-message="Please enter your mobile number.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Address1:</label>
							 <input type="text" class="form-control" name="add1" id="add1" required data-validation-required-message="Please enter your address1.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Address2:</label>
							 <input type="text" class="form-control" name="add2" id="add2" required data-validation-required-message="Please enter your address2.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					 <div class="control-group form-group">
						 <div class="controls">
							 <label>Address3:</label>
							 <input type="text" class="form-control" name="add3" id="add3" required data-validation-required-message="Please enter your address3.">
							 <p class="help-block"></p>
						 </div>
					 </div>
					<div id="success"></div>
					 <!-- For success/fail messages -->
					 <button type="submit" class="btn btn-primary" id="registerButton">Register</button>
				 </form>
			 </div>

		 </div>






	 
	 </div>
	 <script src="vendor/jquery/jquery.min.js"></script>
	 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	 <script src="js/jqBootstrapValidation.js"></script>
	 
	 <script src="js/register.js"></script>

	


		<?php
}
			require_once('admin/dbconclose.php');
		?>
		
	</body>
</html>