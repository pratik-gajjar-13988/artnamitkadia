
 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
            <div class="col-lg-8 mb-4">
          <h3 class="text-white">Subscribe to Namit Kadia</h3>
          <form name="subscribeForm" id="subscribeForm" novalidate>
            <div class="control-group form-group">
            <div class="control-group form-group">
              <div class="controls">
                  <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="subscribeButton">Subscribe</button>
          </form>
         
            <div class="social-icon" style="margin-top: 25px;">
               <h3 class="text-white">Social Connection</h3>
                <a href="<?php echo $socialdetails['facebook']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-facebook"><i class="fa fa-facebook"></i></a>
                <a href="<?php echo $socialdetails['twitter']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a>
                <a href="<?php echo $socialdetails['linkedin']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="<?php echo $socialdetails['insta']; ?>" class="btn azm-social azm-size-48 azm-long-shadow azm-instagram"><i class="fa fa-instagram"></i></a>
            
            
				</div>
        </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	 <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
	<?php
			require_once('Admin/dbconclose.php');
	?>
   