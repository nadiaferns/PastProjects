<?php

require_once 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $search = $_POST['search'];
	   $sql ="select * from project_info where project_name like %".$search."% or project_des like %".$search."% ";
	   $result = mysqli_query($con,$sql);
	   
	   $output = '<table class="table table-striped">
	                <tr>
					    <td> TITLE </td>
					</tr>';

		while($row = mysqli_fetch_assoc($result))
		{
			$output.='<tr>';
			$output.='<td>'.$row['project_name'].'</td>';
		}	
        
        $output.='</tr>';
        $output.='</table>';
        echo $output;		
   }
?>