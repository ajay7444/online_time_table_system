if($row['day']==='monday'){
			$temp=$count;
			$count=$row['lecture'];
			if($count-$temp==2)
			{
			echo '<td></td>';
			}
			else if($count-$temp==3)
			{
			echo 		'<td></td><td></td>';
			}
			else if($count-$temp==4)
			{
			echo 		'<td></td><td></td><td></td>';
			}
			else if($count-$temp==5)
			{
			echo 		'<td></td><td></td><td></td><td></td>';
			}
			else if($count-$temp==6)
			{
			echo 		'<td></td><td></td><td></td><td></td><td></td>';
			}
			else if($count-$temp==7)
			{
			echo 		'<td></td><td></td><td></td><td></td><td></td><td></td>';
			}
			
			$temp=$count;
			
			echo 		'<td>'; 
			echo 		'<table>'; 
			echo 		'<tr>';
			echo 		'<td>'.$row['L_type'].'</td>';
			echo 		'<td>'.$row['subject'].'</td>';
			echo 		'</tr>';
			echo 		'<tr>';
			echo 		'<td>'.$row['prof'].'</td>';
			echo 		'<td>'.$row['room_no'].'</td>';
			echo 		'</tr>';
			echo 		'</table>';
			echo 		'</td>';
		}