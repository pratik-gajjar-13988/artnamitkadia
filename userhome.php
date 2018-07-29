<!DOCTYPE html>
<?php
	$page="index";
	$title="Home";
	require_once('header.php');
	
?>		

    <!-- Page Content -->
    <div class="container">

      

      <!-- Marketing Icons Section -->
      <div class="row">
          <div class="imgcontainer">
              <img src="images/home_img.jpg" alt="Snow" >
              <div class="centered">“There are painters who transform the sun to a yellow spot, but there are others who, with the help of their art and their intelligence, transform a yellow spot into sun.” <p>~Pablo Picasso</p></div>
         </div>
    </div>
    <h2>Namit Kadia</h2>
    <div class="row">
          <div class="imgcontainer">
              <img src="images/home_about1.jpg" alt="Snow" >
              <div class="centeredabout">Born in Ahmedabad, Namit has always shown his interest in art. Painting being his first passion he also started taking photography as a serious business from his childhood.<p><button class="btn"><a href="about.php">View More</a></button></p></div>
              
         </div>
    </div>
      <!-- /.row -->

    <div id='wrap'>

            <div id='calendar'></div>

            <div style='clear:both'></div>
    </div>

      <!-- Portfolio Section -->
      <h2>Works</h2>

       <div class="row">
      <?php

$sql = "SELECT * FROM art_items where new_flag=1";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) { ?>
     
     <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            
            <img class="card-img-top img-responsive" src="<?php echo $row['source']; ?>" alt="<?php echo $row['name']; ?>">
           
          </div>
        </div>
       
       
         <?php
    }
} else {
    echo "0 results";
}

?>	





      
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
     <?php

	require('footer.php');
?>