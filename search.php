
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
<?php include('search_config.php') ?>

<!DOCTYPE html>
<html>
<title>Time Table Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-css.css">
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
<?php include('header.php') ?>
<!-- student detail -->
<div class="w3-container w3-light-grey" style="padding:50px 16px" id="contact">
 
  <div class="w3-row " style="margin-top:64px">
	  <div class="w3-col s3">
	  .
	  </div>
	 
	  <div class="w3-col s6  w3-white">
	  <h3 class="w3-padding">Search Student </h3>
		  
      <form method="post" class="w3-container  w3-white " action="search.php">
		  
		 
		  <div class="row">      
		  <div class="w3-col s9">
		  <input class="w3-input w3-border" name="q"  type="text" placeholder="e.g: name or roll">
		  </div>
		  <div class="w3-col s3">
		  <button class="w3-btn w3-teal w3-border-top" type="submit" name="search" value="search">Submit</button>
		  </div>
		  </div>
		
		 
	  </form>
	  <hr size="2px">
	<table class="w3-table w3-bordered">
    <tr>
	  <th>Student Roll No</th>
      <th>Student Name</th>
     </tr>
	
	  <?php echo $output; ?>
	 
  </table>
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
<script>


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
