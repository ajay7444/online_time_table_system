<?php include('db.php') ?>
<?php
session_start();

$s_name = "";
$s_roll    = "";
$dept    = "";
$day    = "";
$lecture    = "";
$t_id    = "";
$subject    = "";
$course    = "";
$sem    = "";
$room_no    = "";
$L_type    = "";
$errors = array(); 



// REGISTER USER
if (isset($_POST['reg_candidate'])) {
  
  $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
  $s_roll = mysqli_real_escape_string($conn, $_POST['s_roll']);
  
  if (empty($s_name)) { array_push($errors, "Name is required *"); }
  if (empty($s_roll)) { array_push($errors, "Roll no is required *"); }
 
  $user_check_query = "SELECT * FROM student WHERE s_name='$s_name' OR s_roll='$s_roll' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $candidate = mysqli_fetch_assoc($result);
  
  if ($candidate) { 
  // if user exists
    

    if ($candidate['s_roll'] === $s_roll) {
      array_push($errors, "This roll no is already exists *");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO student (s_name, s_roll) 
  			  VALUES('$s_name', '$s_roll')";
  	mysqli_query($conn, $query);
  	$_SESSION['s_name'] = $s_name;
  	$_SESSION['success'] = "You are successfully registered";
  	header('location: successful.php');
  }
  
}

// Upload time table
if (isset($_POST['upload_tt'])) {
  
  $dept = mysqli_real_escape_string($conn, $_POST['dept']);
  $day = mysqli_real_escape_string($conn, $_POST['day']);
  $lecture = mysqli_real_escape_string($conn, $_POST['lecture']);
  $t_id = mysqli_real_escape_string($conn, $_POST['t_id']);
  
  $subject_2 = mysqli_real_escape_string($conn, $_POST['subject_1']);
  $result_explode = explode('|', $subject_2);
  $subject = $result_explode[0];
  $course = mysqli_real_escape_string($conn, $_POST['course']);
  $sem = mysqli_real_escape_string($conn, $_POST['sem']);
  $room_no = mysqli_real_escape_string($conn, $_POST['room_no']);
  $L_type = mysqli_real_escape_string($conn, $_POST['L_type']);
  $batch = mysqli_real_escape_string($conn, $_POST['batch']);
  
  
  if (empty($dept)) { array_push($errors, "Department is required *"); }
  if (empty($day)) { array_push($errors, "Day is required *"); }
  if (empty($lecture)) { array_push($errors, "lecture is required *"); }
  if (empty($t_id)) { array_push($errors, "t_idessor name is required *"); }
  if (empty($subject)) { array_push($errors, "subject is required *"); }
  if (empty($course)) { array_push($errors, "course is required *"); }
  if (empty($sem)) { array_push($errors, "sem is required *"); }
  if (empty($room_no)) { array_push($errors, "Room no is required *"); }
  if (empty($L_type )) { array_push($errors, "Lecture type is required *"); }
 
 
	$check_query = "SELECT * FROM time_table WHERE dept='$dept' and day='$day' and lecture='$lecture' and t_id='$t_id' and subject='$subject' and course='$course' and sem='$sem' and room_no='$room_no' LIMIT 1";
	$result = mysqli_query($conn, check_query);
	$candidate = mysqli_fetch_assoc($result);
  
 // if ($candidate) { 
   //if user exists
    

   // if (($candidate['day'] === $day)&&($candidate['lecture'] === $lecture)&&($candidate['t_id'] === $t_id)&&($candidate['room_no'] === $room_no)) {
    //  array_push($errors, "This t_idessor is already alloted to this room no *");
    //}
 // }

  // Finally, register user if there are no errors in the form
  
		
		$check_query = "SELECT * FROM time_table WHERE lecture='$lecture' and t_id='$t_id' and room_no='$room_no' LIMIT 1";
		$result = mysqli_query($conn, $check_query);
		$f_result = mysqli_fetch_assoc($result);
		if($f_result)
		{
			//if ($f_result['lecture'] === $lecture)
			///{
			//	array_push($errors, 'This lecture is already alloted * ');
			//}
		}
		if (count($errors) == 0) {
		$query = "INSERT INTO time_table (dept, day, lecture, t_id, subject, course, sem, room_no, L_type, batch) 
  		VALUES('$dept', '$day', '$lecture', '$t_id', '$subject', '$course', '$sem', '$room_no', '$L_type','$batch')";
		mysqli_query($conn, $query);
		$_SESSION['room'] = $room_no;
		$_SESSION['t_id'] = $t_id;
		$_SESSION['success'] = " Is successfully allotted to t_idessor :";
		header('location:successful.php');
		}
	
  	
  	
  	
  	
  
  
}
?>