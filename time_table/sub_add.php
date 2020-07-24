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
<?php include('sub_config.php') ?>
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
      <p>Here you can upload new teacher to time table management system.</p>
	  <p><a href="display_tt.php" class="w3-button w3-black"><i class="fa fa-th"> </i> View Time Table</a></p>
    </div>
    <div class="w3-col m8  ">
	
	 
	 
	  <form method="post" class="w3-white w3-border w3-round" action="sub_add.php">
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
                               <label class="w3-text-black"><b>Subject Department :</b></label>
                                    <select class=" form-control" name="sub_dept" onChange="c(this);">
                                        <option value="" >Select Department</option>
                                        <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["dept_id"]; ?>"><?php echo $rs["dept"]; ?></option>
                                        <?php } ?>
                                    </select>
                               
		</p>
		<p>      
			<label class="w3-text-black"><b>Class :</b></label>
			<select class="form-control" name="sub_class" id="output1">
				<option value="" >Select Class </option>
				
			</select>
		</p>
		<p>      
			<label class="w3-text-black"><b>Semester :</b></label>
			<select class="form-control" name="sub_sem">
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
		  <label class="w3-text-black"><b>Subject Name:</b></label>
		   <input class="w3-input w3-border" name="sub_name" value="<?php echo $sub_name; ?>" type="text">
		  </p>
		  <p>      
		  <label class="w3-text-black"><b>Subject Code:</b></label>
		   <input class="w3-input w3-border" name="sub_code" value="<?php echo $sub_code; ?>" type="text">
		  </p>
		  <p>      
		  <label class="w3-text-black"><b>Subject ID:</b></label>
		   <input class="w3-input w3-border" name="sub_id" value="<?php echo $sub_id; ?>" type="text">
		  </p>
		  
		  </div>
		   <div class="w3-col s6 w3-padding w3-border-left">
		  
		  <p>      
		  <label class="w3-text-black"><b>L :</b></label>
		   <select class="form-control" name="sub_L">
			<option value="" disabled selected>Select L:</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			
			
			
		   </select>
		  </p>
		  <p>      
		  <label class="w3-text-black"><b>T :</b></label>
		   <select class="form-control" name="sub_T">
			<option value="" disabled selected>Select T:</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			
			
			
		   </select>
		  </p>
		  <p>      
		  <label class="w3-text-black"><b>P :</b></label>
		   <select class="form-control" name="sub_P">
			<option value="" disabled selected>Select P:</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			
			
			
		   </select>
		  </p>
		    
		</div>
		</div>
		 <div class="w3-center w3-padding-16"> <button class="w3-btn w3-teal " type="submit" name="subject_add" value="submit">Submit</button></div>
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

                   
        </script>
</body>
</html>
