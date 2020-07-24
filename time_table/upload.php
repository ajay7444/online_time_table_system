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
<?php include('../config.php') ?>
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
      <h3>Time Table Management System</h3>
      <p>Here you can allot lecture to any professor acoording time table management system.</p>
	  <p><a href="display_tt.php" class="w3-button w3-black"><i class="fa fa-th"> </i> View Time Table</a></p>
    </div>
    <div class="w3-col m8  ">
	
	 
	 
	  <form method="post" class="w3-white w3-border w3-round" id="filter_form" action="upload.php">
		  <h3 class=" w3-padding ">Enter Details</h3>
      
		  <hr>
		  <?php include('../errors.php'); ?>
		  
		 <div class="w3-row"> 
		 <div class="w3-col s6 w3-padding "> 
		<?php require("configure.php");?>
		<p> 
						<?php
                                $sql = "SELECT * FROM department ORDER BY dept";
                                try {
                                    $stmt = $DB->prepare($sql);
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                } catch (Exception $ex) {
                                    echo($ex->getMessage());
                                }
                                ?>
                               <label class="w3-text-black"><b>Department :</b></label>
                                    <select class=" form-control" name="dept" onChange="c(this);">
                                        <option value="" >Select Department</option>
                                        <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["dept_id"]; ?>"><?php echo $rs["dept"]; ?></option>
                                        <?php } ?>
                                    </select>
                               
		</p>
		<p>      
			<label class="w3-text-black"><b>Course :</b></label>
			<select class="form-control" name="course" id="output1" onchange="s(this);">
				<option value="" >Select Course</option>
				
			</select>
		</p>
		
		<p>      
			<label class="w3-text-black"><b>Semester :</b></label>
			<select class="form-control" name="sem">
				<option value="" disabled selected>Select Semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
		</p>
		<p>      
			<label class="w3-text-black"><b>Subject :</b></label>
			<select class="form-control" name="subject_1" id="output2" onchange="t(this);">
				<option value="" disabled selected>Select Subject</option>
			</select>
		</p>
		
		
		</div>
		<div class="w3-col s6 w3-padding w3-border-left">
		<p>      
			<label class="w3-text-black"><b>Teacher :</b></label>
			<select class="form-control" name="t_id" id="output3">
				<option value="" disabled selected>Select Teacher</option>
			</select>
		</p>
		<p>      
			<label class="w3-text-black"><b>Week Day :</b></label>
			<select class="form-control" name="day">
				<option value="" disabled selected>Select Day</option>
				<option value="monday">Monday</option>
				<option value="tuesday">Tuesday</option>
				<option value="wednesday">Wednesday</option>
				<option value="thursday">Thursday</option>
				<option value="friday">Friday</option>
				<option value="saturday">Saturday</option>
				
		   </select>
		</p>
		<p>      
			<label class="w3-text-black"><b>Period No. :</b></label>
			<select class="form-control" name="lecture">
				<option value="" disabled selected>Select Period No.</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				
			</select>
		</p>
		<p>      
			<label class="w3-text-black"><b>Room No :</b></label>
			<select class="form-control" name="room_no">
				<option value="" disabled selected>Select Class Room</option>
				<option value="L-101">L-101</option>
				<option value="L-102">L-102</option>
				<option value="L-103">L-103</option>
		  </select>
		</p>
		<p>      
			<label class="w3-text-black"><b>Type :</b></label>
			<select class="form-control" name="L_type">
				<option value="" disabled selected>Select Lecture Type</option>
				<option value="L">Lecture</option>
				<option value="T">Tute</option>
				<option value="P">Practical</option>
				
		  </select>
		</p>
		  <p>      
			<label class="w3-text-black"><b>Batch :</b></label>
			<select class="form-control" name="batch">
				<option value="" disabled selected>Select Batch (Optional)</option>
				<option value="1">1</option>
				<option value="2">2</option>
				
		  </select>
		</p>
		  
		</div>
		</div>
		 <div class="w3-center w3-padding-16"> <button class="w3-btn w3-teal " type="submit" name="upload_tt" value="submit">Submit</button></div>
	  </form>
	</div>
  </div>
</div>	
<!-- student detail -->
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-64">
  </footer>
 
<script src="jquery-1.9.0.min.js"></script>
        <script>
                    function c(sel) {
                        var dept_id = sel.options[sel.selectedIndex].value;
                        $("#output1").html("");
         
                        if (dept_id.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "ajax_search.php",
                                data: "dept_id=" + dept_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                }
                            });
                        }
                    }

                    function s(sel) {
                        var sub_class = sel.options[sel.selectedIndex].value;
                        if (sub_class.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "ajax_search2.php",
                                data: "sub_class=" + sub_class,
                                cache: false,
                                beforeSend: function() {
                                    $('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output2").html(html);
                                }
                            });
                        } else {
                            $("#output2").html("");
                        }
                    }
					
					function t(sel) {
                        var t_dept = sel.options[sel.selectedIndex].value;
                        if (t_dept.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "ajax_search3.php",
                                data: "t_dept=" + t_dept,
                                cache: false,
                                beforeSend: function() {
                                    $('#output3').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output3").html(html);
                                }
                            });
                        } else {
                            $("#output3").html("");
                        }
                    }
					
        </script>
</body>
</html>
