<?php
	$page="index";
	$title="Home";
	require_once('header.php');
	$reach_us_msg="";
	if(isset($_POST['contact_details']))
	{
		
		$query="update contact_us set address='".$_POST['address']."', phone='".$_POST['phone']."', email='".$_POST['email']."', time='".$_POST['time']."' where uid=1";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
		$reach_us_msg="Update Successfully...";
	}
	
?>	

<div class="container">
<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Contact Us</h3>

										<?php	
											$query="select * from contact_us where uid=1";
											$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
											$contactetails=mysqli_fetch_assoc($result);
											mysqli_free_result($result);
										?>
			<form  method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Address:</label>
				<input type="text" name="address" class="form-control" value="<?php echo $contactetails['address']; ?>">
			    
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone:</label>
				<input type="text" name="phone" class="form-control" value="<?php echo $contactetails['phone']; ?>">
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
				<input type="text" name="email" class="form-control" value="<?php echo $contactetails['email']; ?>">
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Time:</label>
				<input type="text" name="time" class="form-control" value="<?php echo $contactetails['time']; ?>">
							
                
              </div>
            </div>
			<button type="submit" name="contact_details" class="btn btn-primary">Update</button>
 	  	  <span class="text-success" style="padding-left:10px"><?php echo $reach_us_msg; ?></span>

          	</form>

									
									
								</div>
						</div>
						</div>	

<?php
	require_once('footer.php');
?>	
