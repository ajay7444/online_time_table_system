<?php include('../db.php') ?>
<?php
session_start();

$sub_name = "";
$sub_code = "";
$sub_id = "";
$sub_dept = "";
$sub_class = "";
$sub_sem = "";
$sub_L = "";
$sub_T = "";
$sub_P = "";

$errors = array(); 



// REGISTER USER
if (isset($_POST['subject_add'])) {
  
  $sub_dept = mysqli_real_escape_string($conn, $_POST['sub_dept']);
  $sub_class = mysqli_real_escape_string($conn, $_POST['sub_class']);
  $sub_sem = mysqli_real_escape_string($conn, $_POST['sub_sem']);
  $sub_name = mysqli_real_escape_string($conn, $_POST['sub_name']);
  $sub_code = mysqli_real_escape_string($conn, $_POST['sub_code']);
  $sub_id = mysqli_real_escape_string($conn, $_POST['sub_id']);
  $sub_L = mysqli_real_escape_string($conn, $_POST['sub_L']);
  $sub_T = mysqli_real_escape_string($conn, $_POST['sub_T']);
  $sub_P = mysqli_real_escape_string($conn, $_POST['sub_P']);
  
  
  if (empty($sub_dept)) { array_push($errors, "Subject Department is required *"); }
  if (empty($sub_class)) { array_push($errors, "Class is required *"); }
  if (empty($sub_sem)) { array_push($errors, "Semester is required *"); }
  if (empty($sub_name)) { array_push($errors, "Subject name is required *"); }
  if (empty($sub_code)) { array_push($errors, "Subject code is required *"); }
  if (empty($sub_id)) { array_push($errors, "Subject ID is required *"); }
  if (empty($sub_L)) { array_push($errors, "L is required *"); }
  if (empty($sub_T)) { array_push($errors, "T is required *"); }
  if (empty($sub_P)) { array_push($errors, "P is required *"); }
 
 
 
  $check_query = "SELECT * FROM subject WHERE sub_name='$sub_name' and sub_sem='$sub_sem' LIMIT 1";
  $result = mysqli_query($conn, $check_query);
  $subject = mysqli_fetch_assoc($result);
  
  if ($subject) { 
  // if teacher exists
    

    if (($subject['sub_sem'] === $sub_sem) && ($subject['sub_name'] === $sub_name)){
      array_push($errors, "This subject is already exists in this semester *");
    }
  }

  // Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
  	

  	$query = "INSERT INTO subject (sub_dept, sub_class, sub_sem, sub_name,sub_code, sub_id, sub_L, sub_T, sub_P) 
  			  VALUES('$sub_dept', '$sub_class', '$sub_sem', '$sub_name', '$sub_code', '$sub_id', '$sub_L', '$sub_T', '$sub_P')";
  	mysqli_query($conn, $query);
  	$_SESSION['sub_name'] = $sub_name;
  	$_SESSION['sub_sucess'] = "Subject is successfully uploaded";
  	header('location: successful.php');
  }
  
}


?>