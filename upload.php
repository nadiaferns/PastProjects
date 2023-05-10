<?php
require_once('connection.php');
	
	$pname = $_POST['pname'];
	$sname = $_post['sname'];
	$project_description= $_post['project_description'];
	$project_code= $_post['project_code'];
	$filename = $_post['filename'];
	$img = $_post['img'];
	$img1 = $_post['img1'];
	$tr = $_SESSION['id'];
	$sql = "INSERT INTO `project_info` (`project_name`, `tr_reg`, `student_name`, `project_des`, `project_code`, `project_report`, `img`, `img1`) VALUES ('$pname', '$tr', '$sname', '$project_description', '$project_code', '$filename', '$img', '$img1');";
	echo $sql;
	
	if($con->query($sql) == true)
	{
        echo "Successfully inserted";		
		header("Location: project_blog.php?dep= ");
	}
	else
	{
		echo "ERROR: $sql <br> $con->error";
	}
	
	$con->close();
	
?>