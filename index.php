<?php

		require_once('admin/conn.php');
		session_start();
	
		if (isset($_POST['email'])){
			
			$email = trim($_REQUEST['email']);
			$password = trim($_REQUEST['password']);
		
			//Checking is user existing in the database or not
			$query = "SELECT * FROM `user_reg` WHERE email='$email' and password='".md5($password)."'";
			$result = mysqli_query($link,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['email'] = $email;
				// Redirect user to index.php
				header("Location: userhome.php");
			}else{
				header("Location: index.php");
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
	<img src="images/sitelogo.jpg"/>
    <a class="navbar-brand fontcurved" style="margin-left:3px;" href="userhome.php">Namit Kadia</a>
		<div class="container">
			
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="registration.php">Registration</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Login</a>
					</li>
				
					
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

 <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Login</h3>
          <form id="loginForm" method="post" novalidate>
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
								<input type="text" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password.">
                
              </div>
            </div>
           <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="loginButton">Login</button>
          </form>
        </div>

      </div>






		
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="js/jqBootstrapValidation.js"></script>
    
		<script src="js/login.js"></script>
		</body>
</html>
<?php
		}
	require_once('admin/dbconclose.php');
?>