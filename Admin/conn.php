<?php
	$link=mysqli_connect("localhost","root","","namit_art_gallery");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>