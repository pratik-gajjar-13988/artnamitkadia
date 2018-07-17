<?php
	$page="index";
	$title="Home";
	require_once('header.php');
	$social_details_msg="";
	if(isset($_POST['social_details']))
	{
		
		$query="update social_media set facebook='".$_POST['facebook']."', twitter='".$_POST['twitter']."', linkedin='".$_POST['linkedin']."', insta='".$_POST['insta']."' where uid=1";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
		$social_details_msg="Update Successfully...";
	}
	
?>	

<div class="container">
<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Social Media</h3>

										<?php	
											$query="select * from social_media where uid=1";
											$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
											$db_social_details=mysqli_fetch_assoc($result);
											mysqli_free_result($result);
										?>
			<form  method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Facebook:</label>
				<input type="text" name="facebook" class="form-control" value="<?php echo $db_social_details['facebook']; ?>">
			    
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Twitter:</label>
				<input type="text" name="twitter" class="form-control" value="<?php echo $db_social_details['twitter']; ?>">
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>LinkedIn:</label>
				<input type="text" name="linkedin" class="form-control" value="<?php echo $db_social_details['linkedin']; ?>">
							
                
              </div>
            </div>
			<div class="control-group form-group">
              <div class="controls">
                <label>Insta:</label>
				<input type="text" name="insta" class="form-control" value="<?php echo $db_social_details['insta']; ?>">
							
                
              </div>
            </div>
			<button type="submit" name="social_details" class="btn btn-primary">Update</button>
 	  	  <span class="text-success" style="padding-left:10px"><?php echo $social_details_msg; ?></span>

          	</form>

									
									
								</div>
						</div>
						</div>	

<?php
	require_once('footer.php');
?>	
