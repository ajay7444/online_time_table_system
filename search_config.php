<?php include('db.php') ?>

<?php

if(isset($_POST['search'])){
	 $q = mysqli_real_escape_string($conn,$_POST['q']);
$query = mysqli_query($conn,"select s_name,s_roll from student where (s_name like '%$q%') or (s_roll like '%$q%')LIMIT 4");
$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<p class="w3-text-red w3-padding">No result found !</p>';
	}else{
		while($row = mysqli_fetch_array($query)){
			
    $output .= '<tr><td>'.$row['s_roll'].'</td><td>'.$row['s_name'].'</td></tr>';

	 
				
			}
		}
	}


?>