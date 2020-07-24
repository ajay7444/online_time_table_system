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
<?php 
  include('../db.php')
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
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	width:100px;
}
th, td {
    padding:0px;
    text-align: left;
	
}

table table{
	height:100%;
		width:100%;
	    text-align: left;
		border:none;
}
		
table table td{
		border:none;
		height:100%;
		width:100%;
	    text-align: left;
}
</style>

<body>
<?php include('../header.php') ?>


<!-- student detail -->
<div class="w3-container w3-light-grey" style="padding:50px 16px" id="contact">
 
  <div class="w3-row " style="margin-top:30px">
	  <div class="w3-col s1">
	  .
	  </div>
	 
	  <div class="w3-col s10  w3-white">
	  <div class="w3-padding-16 w3-teal">
	  <h3 class="w3-center">MADAN MOHAN MALAVIYA UNIVERSITY OF TECHNOLOGY</h3>
	  <h4 class="w3-center">Time Table : MCA III Semester</h4>
	  </div>
      <table class="w3-table"style="width:100%">
  <tr>
    <th>Period/Day</th>
    <th colspan="7" class="w3-center w3-indigo">Monday</th> 
   </tr>
  <tr>
    <th></th>
    <th>Subject</th>
	<th>Teacher</th>
    <th>Lecture Type</th>
    <th>Batch</th>
    <th>Room No</th>
   </tr>
   <?php
		$user_check_query = "SELECT * FROM time_table ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result))
		{
			if(($row['day']==='monday') && ($row['course']==="MCA") && ($row['sem']==3))
			{
			echo 		'<tr>';
			echo 		'<th>'.$row['lecture'].'</th>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'<td>'.$row['t_id'].'</td>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['batch'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			
			}
		}
   
   ?>
  <tr>
    <th>Period/Day</th>
    <th colspan="7" class="w3-center w3-red">Tuesday</th> 
   </tr>
  <tr>
    <th></th>
    <th>Subject</th>
	<th>Teacher</th>
    <th>Lecture Type</th>
    <th>Batch</th>
    <th>Room No</th>
   </tr>
   <?php
		$user_check_query = "SELECT * FROM time_table ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result))
		{
			if(($row['day']==='tuesday') && ($row['course']==="MCA") && ($row['sem']==3))
			{
			echo 		'<tr>';
			echo 		'<th>'.$row['lecture'].'</th>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'<td>'.$row['t_id'].'</td>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['batch'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			
			}
		}
   
   ?>
  <tr>
    <th>Period/Day</th>
    <th colspan="7" class="w3-center w3-green">Wednesday</th> 
   </tr>
  <tr>
    <th></th>
    <th>Subject</th>
	<th>Teacher</th>
    <th>Lecture Type</th>
    <th>Batch</th>
    <th>Room No</th>
   </tr>
   <?php
		$user_check_query = "SELECT * FROM time_table ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result))
		{
			if(($row['day']==='wednesday') && ($row['course']==="MCA") && ($row['sem']==3))
			{
			echo 		'<tr>';
			echo 		'<th>'.$row['lecture'].'</th>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'<td>'.$row['t_id'].'</td>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['batch'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			
			}
		}
   
   ?>
  <tr>
    <th>Period/Day</th>
    <th colspan="7" class="w3-center w3-orange">Thursday</th> 
   </tr>
  <tr>
    <th></th>
    <th>Subject</th>
	<th>Teacher</th>
    <th>Lecture Type</th>
    <th>Batch</th>
    <th>Room No</th>
   </tr>
   <?php
		$user_check_query = "SELECT * FROM time_table ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result))
		{
			if(($row['day']==='thursday') && ($row['course']==="MCA") && ($row['sem']==3))
			{
			echo 		'<tr>';
			echo 		'<th>'.$row['lecture'].'</th>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'<td>'.$row['t_id'].'</td>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['batch'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			
			}
		}
   
   ?>
  <tr>
    <th>Period/Day</th>
    <th colspan="7" class="w3-center w3-teal">Friday</th> 
   </tr>
  <tr>
    <th></th>
    <th>Subject</th>
	<th>Teacher</th>
    <th>Lecture Type</th>
    <th>Batch</th>
    <th>Room No</th>
   </tr>
   <?php
		$user_check_query = "SELECT * FROM time_table ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result))
		{
			if(($row['day']==='friday') && ($row['course']==="MCA") && ($row['sem']==3))
			{
			echo 		'<tr>';
			echo 		'<th>'.$row['lecture'].'</th>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'<td>'.$row['t_id'].'</td>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['batch'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			
			}
		}
   
   ?>
  <tr>
    <th>Period/Day</th>
    <th colspan="7" class="w3-center w3-pink">Saturday</th> 
   </tr>
  <tr>
    <th></th>
    <th>Subject</th>
	<th>Teacher</th>
    <th>Lecture Type</th>
    <th>Batch</th>
    <th>Room No</th>
   </tr>
   <?php
		$user_check_query = "SELECT * FROM time_table ";
		$result = mysqli_query($conn, $user_check_query);
		
		while($row = mysqli_fetch_assoc($result))
		{
			if(($row['day']==='saturday') && ($row['course']==="MCA") && ($row['sem']==3))
			{
			echo 		'<tr>';
			echo 		'<th>'.$row['lecture'].'</th>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'<td>'.$row['t_id'].'</td>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['batch'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			
			}
		}
   
   ?>
  
</table>
      </div>
  	
	
   
		  
    </div>
	 <div class="w3-col s1">
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
<?php 
mysqli_close($conn);
?>