<!DOCTYPE html>
<?php
	$page="contact";
	$title="Contact";
	require_once('header.php');
	
?>	

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Cart 
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Cart</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
     
   
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
 
 <div class="table-responsive">
 <table class="table">
<tbody>

<?php		
    foreach ($_SESSION["cart_item"] as $item){

      $sql2 = "SELECT * FROM art_items WHERE item_id=" .$item ;
      $result2 = mysqli_query($link, $sql2);
      while($row = mysqli_fetch_assoc($result2)) {
		?>
				<tr>
        <td style="border-bottom:#F0F0F0 1px solid;"><img src="<?php echo $row['source']; ?>" class="cartimg-responsive" alt="<?php echo $row['name']; ?>"/></td>
			 
        <td style="border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><strong><?php echo $row["name"]; ?></strong></td>
			
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><?php echo "Rs. ".$row["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><a href="cart.php?action=remove&item_id=<?php echo $row["item_id"]; ?>" class="btnRemoveAction">Remove</a></td>
				</tr>
				<?php
        $item_total += $row["price"];
      }
		}
		?>

<tr>
        
<form method="post" action="index.php">
<td style="border-bottom:#F0F0F0 1px solid;"><button type="submit" class="btn btn-primary" id="btnBrowse">Continue Browsing</button></td>
  </form> 
  <td style="border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><strong>Total:</strong> </td>
  <td style="text-align:right;border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><?php echo "Rs. ".$item_total; ?></td> 
  <form method="post" action="cart.php">
      <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"> <button type="submit" class="btn btn-primary" id="btnCheckout">Proceed to Checkout</button></td>
      </form> 
    </tr>
</tbody>
</table>
</div>	

  <?php
}else{
  ?>

          <img src="images/emptycart.png" class="emptycart " alt="empty cart"/>
          <h4  style="margin-left: 425px;margin-bottom: 100px; opacity:0.3">
               Your cart is empty</a>
              </h4>
 
  <?php
}
?>

</div>
</div>
      <!-- /.row -->

     
    <!-- /.container -->

       <?php

	require('footer.php');
?>