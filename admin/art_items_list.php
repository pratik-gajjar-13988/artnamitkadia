<?php
	$page="index";
	$title="Home";
	require_once('header.php');

	if(isset($_GET['action'])) {
		
		switch($_GET["action"]) {
		 
		  case "remove":
		
			
		  $sql1 = "DELETE  FROM art_items WHERE item_id=". $_GET["item_id"] ;
		  $item_details = mysqli_query($link, $sql1) or die("delete failed: " . mysqli_error($link));
			
		   
		  break;
		}
	}

	
?>	

<div class="container">
<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Art Items</h3> <a href="item_add.php">Add New Item</a>
					<div class="table-responsive">
 <table class="table">
<tbody>

										<?php	
											$query="select * from art_items";
											$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
									
											while($row = mysqli_fetch_assoc($result)) {
										?>
												<tr>
												<td style="border-bottom:#F0F0F0 1px solid;"><img src="../<?php echo $row['source']; ?>" class="cartimg-responsive" alt="<?php echo $row['name']; ?>"/></td>
											 
												<td style="border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><strong><?php echo $row["name"]; ?></strong></td>
												<td style="border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><strong><?php echo $row["description"]; ?></strong></td>
												<td style="text-align:right;border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><?php echo "Rs. ".$row["price"]; ?></td>
												<td style="text-align:center;border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><a href="item_edit.php?action=edit&item_id=<?php echo $row["item_id"]; ?>" class="btnEditAction">Edit</a></td>
												<td style="text-align:center;border-bottom:#F0F0F0 1px solid; vertical-align: middle;"><a href="art_items_list.php?action=remove&item_id=<?php echo $row["item_id"]; ?>" class="btnRemoveAction">Remove</a></td>
												</tr>
												<?php
											
											}
	require_once('footer.php');
?>	
