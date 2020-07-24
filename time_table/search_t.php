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
    <div class="w3-col m2">
      .
    </div>
    <div class="w3-col m8 w3-white ">
	
	 
	  
	    
	   <h3 class="w3-padding">Search Time Table </h3>
		  <?php include('search_config.php') ?>
      <form method="post" class=" w3-white " action="search_t.php">
		  <div class="row">      
		  <div class="w3-col s9">
		  <input class="w3-input w3-border" name="q"  type="text" placeholder="e.g: teacher, id, types">
		  </div>
		  <div class="w3-col s3">
		  <button class="w3-btn w3-teal w3-border-top" type="submit" name="search_t" value="search">Submit</button>
		  </div>
		  </div>
		  </form>
	  <table class="w3-table w3-bordered w3-margin-top">
    <tr>
	  <th>Teacher</th>
      <th>Department</th>
      <th>ID</th>
      <th>T. Type</th>
      
     </tr>
	
	  <?php echo $output; ?>
	 
  </table>
	 </div>
	 <div class="w3-col m2">
      .
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
<?php 
mysqli_close($conn);
?>