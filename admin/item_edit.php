<?php
	$page="index";
	$title="Home";
	$item_success_msg="";
	$itemid = $_GET["item_id"];
	require_once('header.php');
	if(isset($_GET['action'])) {
   
		switch($_GET["action"]) {
		  case "edit":
			if(isset($_POST['item_detail']))
			{
				
				$query="update art_items set name='".$_POST['itemname']."', category='".$_POST['category']."' , description='".$_POST['description']."' , price=".$_POST['price']." where item_id=".$itemid;
				mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
			

				if(!empty($_FILES['uploaded_file']))
				{
					$path = "../images/";
					$path = $path . basename( $_FILES['uploaded_file']['name']);
					if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
						$query="update art_items set source='images/".$_FILES['uploaded_file']['name']."' where item_id=".$itemid;
						mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
					
					} 
				}
				$item_success_msg="Update Successfully...";
			}

			
			
		   
		  break;
		 
		}
	}
	
?>	

<div class="container">
<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Edit Art Item</h3>

										<?php	
											$query="select * from art_items where item_id=" . $itemid ;
											$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
											$item_details=mysqli_fetch_assoc($result);
											mysqli_free_result($result);
										?>
			<form  enctype="multipart/form-data"  method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Name:</label>
				<input type="text" name="itemname" class="form-control" value="<?php echo $item_details['name']; ?>" required> 
			    
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Image:</label>
								<img src="../<?php echo $item_details['source']; ?>" class="cartimg-responsive" alt="<?php echo $item_details['name']; ?>"/>
				<input type="file"  name="uploaded_file" > 
							
                
              </div>
            </div>
						<div class="control-group form-group">
              <div class="controls">
                <label>Description:</label>
				<input type="text" name="description" class="form-control" value="<?php echo $item_details['desc']; ?>" required>
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Category:</label>
								<select name="category">

<option value="acrylic" <?php if($item_details['category']=="acrylic") echo 'selected="selected"'; ?> >acrylic</option>
<option value="photo" <?php if($item_details['category']=="photo") echo 'selected="selected"'; ?> >photo</option>
<option value="water" <?php if($item_details['category']=="water") echo 'selected="selected"'; ?> >water</option>
 
</select> 
			
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Price:</label>
				<input type="text" name="price" class="form-control" value="<?php echo $item_details['price']; ?>" required>
							
                
              </div>
            </div>
			<button type="submit" name="item_detail" class="btn btn-primary">Update</button>
 	  	  <span class="text-success" style="padding-left:10px"><?php echo $item_success_msg; ?></span>

          	</form>

									
									
								</div>
						</div>
						</div>	

<?php
	require_once('footer.php');
?>	
