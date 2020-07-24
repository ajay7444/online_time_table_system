
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
<?php include('t_config.php') ?>

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
      <h3>Teacher Registration :</h3>
      <p>Here you can register teacher.</p>
	  <p><a href="display_tt.php" class="w3-button w3-black"><i class="fa fa-th"> </i> View Time Table</a></p>
    </div>
    <div class="w3-col m8  ">
	
	
	  
	  <form method="post" class="w3-white w3-border w3-round" action="t_registration.php">
		  <h3 class=" w3-padding ">Enter Details</h3>
      
		  <hr>
		  <?php include('../errors.php'); ?>
		  
		 <div class="w3-row"> 
		 <div class="w3-col s6 w3-padding "> 
		  <p>      
		  <label class="w3-text-black"><b>Teacher name:</b></label>
		   <input class="w3-input w3-border" name="t_name" value="<?php echo $t_name; ?>" type="text">
		  </p>
		  <p>      
		  <label class="w3-text-black"><b>Department :</b></label>
		   <select class="form-control" name="t_dept">
			<option value="" disabled selected>Select Department</option>
			<?php
			$query = "SELECT * FROM department ";
			$result = mysqli_query($conn, $query);
		
			while($row = mysqli_fetch_assoc($result)){
				?>
			<option value="<?php echo $row['dept_id'];?>"><?php echo $row['dept'];?></option>
			<?php
			
			}
			?>
		   </select>
		  </p>
		  
		   <p>      
		  <label class="w3-text-black"><b>Teacher ID:</b></label>
		   <input class="w3-input w3-border" name="t_id" value="<?php echo $t_id; ?>" type="text">
		  </p>
		  <p>      
		  <label class="w3-text-black"><b>Teacher Type :</b></label>
		  <select class="form-control" name="t_type">
			<option value="" disabled selected>Select Type</option>
			<option value="Regular">Regular</option>
			<option value="Guest Faculty">Guest Faculty</option>
			<option value="Research Scholar">Research Scholar</option>
		  </select></p>
		    
			</div>
			</div>
		 <div class="w3-center w3-padding-16"> <button class="w3-btn w3-teal " type="submit" name="upload_t" value="submit">Submit</button></div>
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
