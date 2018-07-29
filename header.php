<!DOCTYPE html>

<?php

  
  require_once('admin/conn.php');
  include("auth.php");	
  $query="select * from social_media where uid=1";
	$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
	$socialdetails=mysqli_fetch_assoc($result);
  $email = trim($_SESSION['email']);
  if(isset($_GET['action'])) {
   
    switch($_GET["action"]) {
      case "add":
         $itemid = trim($_REQUEST['item_id']);
         $query2 = "INSERT INTO `cart`(`item_id`, `email`)
         VALUES ($itemid,'$email')";
         $result2 = mysqli_query($link,$query2) or die(mysql_error());
          break;
      case "remove":
           $itemid = trim($_REQUEST['item_id']);
           $query = "DELETE FROM `cart` WHERE item_id=$itemid and email like '$email'";
           $result = mysqli_query($link,$query) or die(mysql_error());
      break;
      case "empty":
      $itemid = trim($_REQUEST['item_id']);
      $query = "DELETE * FROM `cart` WHERE email like '$email'";
      $result = mysqli_query($link,$query) or die(mysql_error());
        break;	
    }
    }
   
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
        <a class="navbar-brand" href="userhome.php">Namit Kadia</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="userhome.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="photography.php">Photography</a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Paintings
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="acrylicpaintings.php">Acrylic Paintings</a>
                <a class="dropdown-item" href="waterpaintings.php">Water Paintings</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            
			  <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/slider1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image:  url('images/slider2.jpg')">
            <div class="carousel-caption d-none d-md-block">
            
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image:  url('images/slider3.jpg')">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
  

   