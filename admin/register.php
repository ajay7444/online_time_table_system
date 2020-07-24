<?php include('server.php') ?>

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
</style>
<body>
<?php include('../header.php') ?>

<div class="w3-container w3-light-grey" style="padding:70px 16px">
	<div class="w3-margin-bottom">
	  <h3 class="w3-center">MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY</h3>
	  <h4 class="w3-center">Gorakhpur, Uttar Pradesh (273010).</h4>
	  </div>
  <div class="w3-row-padding">
    <div class="w3-col m4">
	.
     </div>
    <div class="w3-col m5  ">
	
	
	  
	  <form method="post" class="w3-white w3-border w3-round" action="register.php">
		   <h3 class="w3-padding"><strong>Please Register :</strong></h3>
      
		  <hr>
		  <?php include('../errors.php'); ?>
		  
		 <div class="w3-row"> 
		 <div class="w3-col s12 w3-padding "> 
		  
		   <p>      
		  <label class="w3-text-black">Username</label>
			<input class="w3-input w3-border" type="text" name="username" value="<?php echo $username; ?>">
			</p>
			<p>      
		  <label class="w3-text-black">Email</label>
			<input class="w3-input w3-border" type="text" name="email" value="">
			</p>
		 <p>      
		  <label class="w3-text-black">Password</label>
			<input class="w3-input w3-border" type="password" name="password_1">
			</p>
		<p>      
		  <label class="w3-text-black">Confirm Password</label>
			<input class="w3-input w3-border" type="password" name="password_2">
			</p>
		 
			</div>
			</div>
		 <div class="w3-margin w3-padding-16" style="display:block;"> <button class="w3-btn w3-teal " type="submit" name="reg_user" value="submit">Register</button>  <button class="w3-btn w3-teal " ><a href="login.php">Login</a></button></div>
	  <div class="w3-margin w3-padding-16"></div>
	  </form>
	  
	  
    
       </div>
  </div>
</div>	
<!-- student detail -->
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-64">
  </footer>
 
<!-- Add Google Maps -->

</body>
</html>
