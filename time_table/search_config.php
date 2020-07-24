
<?php
include('../db.php')
?>
<?php

if(isset($_POST['search_t'])){
	 $q = mysqli_real_escape_string($conn,$_POST['q']);
$query = mysqli_query($conn,"select * from teacher where (t_name like '%$q%') or (t_id like '%$q%') or (t_type like '%$q%') LIMIT 4");
$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<p class="w3-text-red w3-padding">No result found !</p>';
	}else{
		while($row = mysqli_fetch_array($query)){
			
    $output .= '<tr><td>'.$row['t_name'].'</td><td>'.$row['t_dept'].'</td><td>'.ucwords($row['t_id']).'</td><td>'.$row['t_type'].'</td></tr>';

	 
				
			}
		}
	}	
?>