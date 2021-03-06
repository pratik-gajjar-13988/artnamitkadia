<!DOCTYPE html>
<?php
	$page="contact";
	$title="Contact";
  require_once('header.php');
  
	
?>	

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Namit Kadia</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="userhome.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=23.0719659,72.5395307&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
        <?php	
											$query="select * from contact_us where uid=1";
											$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
											$contactetails=mysqli_fetch_assoc($result);
											mysqli_free_result($result);
										?>
          <h3>Contact Details</h3>
          <p><?php echo $contactetails['address']; ?>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: <?php echo $contactetails['phone']; ?>
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="<?php echo $contactetails['email']; ?>"><?php echo $contactetails['email']; ?>
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: <?php echo $contactetails['time']; ?>
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

       <?php

	require('footer.php');
?>