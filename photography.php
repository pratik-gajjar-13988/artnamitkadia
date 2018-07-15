<!DOCTYPE html>
<?php
	$page="photography";
	$title="photography";
  require('header.php');
  
  
	
?>	

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Namit's
        <small>Photography</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Photography</li>
      </ol>

      <div class="row">

      <?php

$sql = "SELECT * FROM art_items WHERE category LIKE 'oil'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) { ?>
     
     <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            
            <img class="card-img-top img-responsive" src="<?php echo $row['source']; ?>" alt="<?php echo $row['name']; ?>">
            <div class="card-body">
              <h4 class="card-title"><?php echo $row['name']; ?></h4>
              <h6 class="card-subtitle mb-2 text-muted">Rs. <?php echo $row['price']; ?></h6>
          
            </div>
            <form method="post" action="photography.php?action=add&item_id=<?php echo $row['item_id']; ?>">
            <div class="card-footer">
          
            <button type="submit" class="btn btn-primary" id="btnAddAction">Add to Cart</button>
            
            </div>
            </form>
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