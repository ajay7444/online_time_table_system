<?php
session_start();

$f_name = "";
$l_name   = "";
$email    = "";
$passward    = "";

$errors = array(); 

include('database.php');


?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/googleapis.css">
<link rel="stylesheet" href="css/fontawesome.css">
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
    background-image: url("/w3images/mac.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">About</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	<a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register guard</a>
      <a href="admin.php" class="w3-bar-item w3-button">Pass</a>
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  
</nav>
<!-- Skills Section -->
<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:60px 16px" id="pricing">
  <?php if (isset($_SESSION['mob'])) : ?>
  
  <?php
			$mob = $_SESSION['mob'];
			$check_query = "SELECT * FROM visitor_data WHERE mob='$mob' LIMIT 1";
			$result = mysqli_query($conn, $check_query);
			$fetch = mysqli_fetch_assoc($result);
				?>
  <div class="w3-row-padding" style="margin-top:64px">
    <table class="w3-table w3-striped">
		<tr>
		<th>Name</th>
		<td><?php echo $fetch['name'];  ?></td>
		</tr>
		<tr>
		<th>Mobile NO</th>
		<td><?php echo $fetch['mob'];  ?></td>
		</tr>
		<tr>
		<th>Person To Meet</th>
		<td><?php echo $fetch['ptm'];  ?></td>
		</tr>
		<tr>
		<th>Purpose</th>
		<td><?php echo $fetch['purpose'];  ?></td>
		</tr>
		<tr>
		<th>Address :</th>
		<td><?php echo $fetch['addrs'];  ?></td>
		</tr>
	</table>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
 <div class="imgcontainer">
    <img src="1.jpg" style="width:250px;" alt="Avatar" class="avatar">
  </div>
  <div class="w3-xlarge w3-section">
    
  </div>
 
</footer>
 <?php
			unset($_SESSION['mob']);
					
	?>			
<?php endif ?>





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

</body>
</html>
