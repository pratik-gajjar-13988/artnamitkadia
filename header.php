<!DOCTYPE html>

<?php

  
  require_once('Admin/conn.php');
  session_start();
  if(isset($_GET['action'])) {
   
    switch($_GET["action"]) {
      case "add":
    
          $sql1 = "SELECT * FROM art_items WHERE item_id=" . $_GET["item_id"] ;
          $result1 = mysqli_query($link, $sql1);
          while($row = mysqli_fetch_assoc($result1)) {
         $arr = array($row['item_id']);
         
          if(!empty($_SESSION["cart_item"])) {
            if(!in_array( $arr ,array_keys($_SESSION["cart_item"]))){ 
              $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $arr);
            }
          } else {
            $_SESSION["cart_item"] =  $arr; 
          }
        }
       
      break;
      case "remove":
     
        
        if (($key = array_search($_GET['item_id'], $_SESSION["cart_item"])) !== false) {
            unset($_SESSION["cart_item"][$key]);
            if(count($_SESSION["cart_item"]) == 0){
              unset($_SESSION["cart_item"]);
            }
            header("Location: cart.php");
       }
       
       
      break;
      case "empty":
        unset($_SESSION["cart_item"]);
        header("Location: cart.php");
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

   