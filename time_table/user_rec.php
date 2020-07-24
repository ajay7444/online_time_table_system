
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
<script
  src="https://code.jquery.com/jquery-1.5.js"
  integrity="sha256-NhPIl0e+Si1dwX9ELQpILaZleE4uWjkx+5ofw4+g+o0="
  crossorigin="anonymous"></script>
  
 
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
    <div class="w3-col m6 w3-margin w3-card w3-cyan w3-padding-64 ">
	
	
	  
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
		 <button class="w3-btn w3-white "><a href="../admin/register.php" class="w3-bar-item w3-button">Add User</a></button>
		 </div>
	  
    </div> <div >
	<table class="w3-table w3-bordered w3-margin-top">
	<tr>
	  <th>User</th>
      <th>Email</th>
	  </tr>
	<?php
	
		$user_check_query = "SELECT * FROM users ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result)){
    
      
      
     echo '<tr>';
	 echo'<td>'.$row['username'].'</td>';
	 echo'<td>'.$row['email'].'</td>';
	 echo '</tr>';
	 
		}
	  ?>
	 
  </table>
	</div>
	
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
  </script>
</body>
</html>
