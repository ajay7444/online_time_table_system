<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: http://localhost/time-table/admin/login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: http://localhost/time-table/admin/login.php");
	}

?>

<!DOCTYPE html>
<html>
<title>Time Table Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/font-css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("https://www.w3schools.com/w3images/mac.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>
<?php include('../header.php') ?>
<!-- student detail -->
<div class="w3-container w3-light-grey" style="padding:50px 16px" id="contact">
 
  <div class="w3-row " style="margin-top:64px">
	  <div class="w3-col s3">
	  .
	  </div>
	 
	  <div class="w3-col s6 ">
      <div class="w3-text-teal w3-center w3-padding-64 w3-white" >
		  
	
      	 <h3>
		 <a href="#"><button class="w3-button w3-teal">Successfully Upload</button></a>
		 </h3>
	

      </div>
  	
	
   
		  
    </div>
	 <div class="w3-col s3">
	 .
	  </div>
   </div>
   
  </div>
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-64">
  </footer>
 
<!-- Add Google Maps -->

</body>
</html>
