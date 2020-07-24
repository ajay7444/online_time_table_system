
<?php
session_start();

$t_name = "";
$t_dept   = "";
$t_id    = "";
$t_type    = "";

$errors = array(); 

include('../db.php');

// REGISTER USER
if (isset($_POST['upload_t'])) {
  
  $t_name = mysqli_real_escape_string($conn, $_POST['t_name']);
  $t_dept = mysqli_real_escape_string($conn, $_POST['t_dept']);
  $t_id = mysqli_real_escape_string($conn, $_POST['t_id']);
  $t_type = mysqli_real_escape_string($conn, $_POST['t_type']);
 
  if (empty($t_name)) { array_push($errors, "Name is required *"); }
  if (empty($t_dept)) { array_push($errors, "Department is required *"); }
  if (empty($t_id)) { array_push($errors, "Teacher Id  is required *"); }
  if (empty($t_type)) { array_push($errors, "Teacher type is required *"); }
 
 
  $check_query = "SELECT * FROM teacher WHERE t_name='$t_name' and t_id='$t_id' LIMIT 1";
  $result = mysqli_query($conn, $check_query);
  $teacher = mysqli_fetch_assoc($result);
  
  if ($teacher) { 
  // if teacher exists
    

    if (($teacher['t_name'] === $t_name) && ($teacher['t_id'] === $t_id)){
      array_push($errors, "This name and id is already exists *");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO teacher (t_name, t_dept, t_id, t_type) 
  			  VALUES('$t_name', '$t_dept', '$t_id', '$t_type')";
  	mysqli_query($conn, $query);
  	$_SESSION['t_name'] = $t_name;
  	$_SESSION['complete'] = "You are successfully registered";
  	header('location: successful.php');
  }
  
}

?>
