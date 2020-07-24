<?php require("configure.php");?>
<form method="post" class="w3-white w3-border w3-round" id="filter_form" action="upload.php">
		  <h3 class=" w3-padding ">Enter Details</h3>
      
		  <hr>
		
		  
		 <div class="w3-row"> 
		 <div class="w3-col s6 w3-padding "> 
		
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
                                    <select class=" form-control" name="dept" onChange="showState(this);">
                                        <option value="" >Please Select</option>
                                        <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["dept"]; ?></option>
                                        <?php } ?>
                                    </select>
                               
		</p>
		<p>      
			<label class="w3-text-black"><b>Course :</b></label>
			<select class="form-control" name="course" id="output1" onchange="showCity(this);">
				<option value="" >Select Course</option>
				
			</select>
		</p>
		<p>      
			<label class="w3-text-black"><b>sem :</b></label>
			<select class="form-control" name="sem">
				<option value="" disabled selected>Select sem</option>
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
			<select class="form-control" name="subject" id="output2">
				<option value="" disabled selected>Select Subject</option>
			</select>
		</p>
		<script src="jquery-1.9.0.min.js"></script>
        <script>
                    function showState(sel) {
                        var c_id = sel.options[sel.selectedIndex].value;
                        $("#output1").html("");
                        $("#output2").html("");
                        if (c_id.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "ajax_search.php",
                                data: "c_id=" + c_id,
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

                    function showCity(sel) {
                        var s_id = sel.options[sel.selectedIndex].value;
                        if (s_id.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "ajax_search2.php",
                                data: "s_id=" + s_id,
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
        </script>
		</div>
		<div class="w3-col s6 w3-padding w3-border-left">
		<p>      
			<label class="w3-text-black"><b>Teacher Name :</b></label>
			<select class="ajax_result form-control" name="prof" >
				<option value="">Select</option>
				<?php $check = "SELECT * FROM teacher "; $result = mysqli_query($conn, $check); while($row = mysqli_fetch_array($result)) {echo   '<option value="'.$row['t_id'].'">'.$row['t_name'].'</option>';}?>
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
				
		  </select>
		</p>
		  
		</div>
		</div>
		 <div class="w3-center w3-padding-16"> <button class="w3-btn w3-teal " type="submit" name="upload_tt" value="submit">Submit</button></div>
	  </form>