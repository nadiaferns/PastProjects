<?php
    require_once('connection.php');
	if($_SERVER['REQUEST_METHOD']=='POST')
   {
	   $search = $_POST['search'];
	   $sql ="select * from project_info where project_name like %".$search."% or project_des like %".$search."% ";
	   $result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo '<a href="#" class="list-group-item list-group-item-action p-2 border">'.$row[''].'</a>';
		}
	}
	else
	{
		echo '<p class="list-group-item">Record Not Found</p>';
	}
}
?>