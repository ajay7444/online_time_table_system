
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
include('../db.php')
?>
<!DOCTYPE html>
<html>
<title>Time Table Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/form.css">
  
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
.active { text-color: red; }
</style>
<body>
<?php include('../header.php') ?>

<div class="w3-container w3-light-grey" style="padding:70px 16px">
	<div class="w3-margin-bottom">
	  <h3 class="w3-center">MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY</h3>
	  <h4 class="w3-center">Gorakhpur, Uttar Pradesh (273010).</h4>
	  </div>
  <div class="w3-row-padding">
    <div class="w3-col m3">
	.
      </div>
    <div class="w3-col m6 w3-margin w3-card w3-cyan w3-padding ">
	
	
	  
	  <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
	<div >
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<h2 class="w3-center w3-text-white">Welcome <strong><span class="w3-text-white"><?php echo $_SESSION['username']; ?></span></strong></h2>
			<h3 class="w3-center w3-text-white">Welocome to Time Table Management System</h3>
			
		<?php endif ?>
		 <div class="w3-center">
		 <button class="w3-btn w3-white "><a href="register.php" class="w3-bar-item w3-button">Add User</a></button>
		 <button class="w3-btn w3-white "><a href="../time_table/user_rec.php" class="w3-bar-item w3-button">Display User</a></button>
		 </div>
	  
    </div>
       </div>
  </div>
  
  <div class="w3-row-padding">
  <div class="w3-col m4 ">
  <h3 class="w3-text-black w3-center">Available Department </h3>
	<table class="w3-table w3-bordered w3-margin w3-green w3-card ">
	<tr>
	  <th>Department</th>
      <th>ID</th>
	  </tr>
	<?php
	
		$user_check_query = "SELECT * FROM department ";
		$result = mysqli_query($conn, $user_check_query);
		while($row = mysqli_fetch_assoc($result)){
			 echo '<tr>';
			 echo'<td>'.$row['dept'].'</td>';
			 echo'<td>'.$row['dept_id'].'</td>';
			 echo '</tr>';
		 }
	 ?>
	 
  </table>
  </div>
  <div class="w3-col m4 ">
  <h3 class="w3-text-black w3-center">Available Courses </h3>
	<table class="w3-table w3-bordered w3-margin w3-teal w3-card ">
	
	<tr>
	  <th>Course Name</th>
      <th>ID</th>
	  </tr>
	<?php
	
		$user_check_query = "SELECT * FROM course ";
		$result = mysqli_query($conn, $user_check_query);
		while($row = mysqli_fetch_assoc($result)){
			 echo '<tr>';
			 echo'<td>'.$row['c_name'].'</td>';
			 echo'<td>'.$row['c_id'].'</td>';
			 echo '</tr>';
		 }
	 ?>
	 
  </table>
  </div>
  <div class="w3-col m4 ">
  <h3 class="w3-text-black w3-center">Available Teachers </h3>
	<table class="w3-table w3-bordered w3-margin w3-red w3-card ">
	
	<tr>
	  <th>Teacher</th>
      <th>ID</th>
	  </tr>
	<?php
	
		$user_check_query = "SELECT * FROM teacher ";
		$result = mysqli_query($conn, $user_check_query);
		while($row = mysqli_fetch_assoc($result)){
			 echo '<tr>';
			 echo'<td>'.$row['t_name'].'</td>';
			 echo'<td>'.$row['t_id'].'</td>';
			 echo '</tr>';
		 }
	 ?>
	 
  </table>
  </div>
  </div>
</div>	
<!-- student detail -->
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-64">
  </footer>
 
<!-- Add Google Maps -->
 <script>
  
  $(function(){

    var url = var url = window.location.pathname, 
        urlRegExp = new RegExp(url == '/' ? window.location.origin + '/?$' : url.replace(/\/$/,'')); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.menu a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

});

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
