<?php
	$page="index";
	$title="Home";
	$item_success_msg="";
	ini_set('upload-max-filesize', '10M');
ini_set('post_max_size', '10M');

	require_once('header.php');

			if(isset($_POST['item_detail']))
			{
				
			
				if(!empty($_FILES['uploaded_file']))
				{
					$path = "../images/";
					$path = $path . basename( $_FILES['uploaded_file']['name']);
					$filetodb = "images/".basename( $_FILES['uploaded_file']['name']);
					$name=$_POST['itemname'];
					$category=$_POST['category'];
					$price=$_POST['price'];
					$description = $_POST['description'];
					if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
						$query = "INSERT INTO `art_items`(`name`, `source`, `category`, `description`,`price`)
						VALUES ('$name','$filetodb','$category', '$description',$price)";
						$result = mysqli_query($link,$query) or die("Error adding data.".mysqli_error($link));
						$item_success_msg="Item added successfully";
					}  else{
						echo "There was an error uploading the file, please try again!";
				}
				}else{
					$item_success_msg="Please upload file";
				}
			
			}

			
			
		   
		 
	
?>	

<div class="container">
<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Add Art Item</h3>

									
			<form  enctype="multipart/form-data"  method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Name:</label>
				<input type="text" name="itemname" class="form-control" required>
			    
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Image:</label>
								
				<input type="file"  name="uploaded_file" required> 
							
                
              </div>
            </div>
						<div class="control-group form-group">
              <div class="controls">
                <label>Description:</label>
				<input type="text" name="description" class="form-control" required >
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Category:</label>
								<select name="category">

<option value="acrylic">acrylic</option>
<option value="photo">photo</option>
<option value="water">water</option>
 
</select> 
			
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Price:</label>
				<input type="text" name="price" class="form-control" required>
							
                
              </div>
            </div>
			<button type="submit" name="item_detail" class="btn btn-primary">Add</button>
 	  	  <span class="text-success" style="padding-left:10px"><?php echo $item_success_msg; ?></span>

          	</form>

									
									
								</div>
						</div>
						</div>	

<?php
	require_once('footer.php');
?>	
