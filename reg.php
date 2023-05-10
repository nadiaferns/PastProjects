<?php
   require_once('connection.php');
	
	$name = $_POST['name'];
	$course = $_POST['dep'];
    $college = $_POST['college'];
	$email = $_POST['email'];
	$u_name = $_POST['u_name'];
	$pass_word = $_POST['pass_word'];
	$tr_id = $_POST['uprn'];
	$sql = "INSERT INTO `teachers` (`tr_id`, `tr_name`, `username`, `email_id`, `college`, `department`, `password`) VALUES ('$tr_id', '$name', '$u_name', '$email','$college', '$course',  '$pass_word');";
	echo $sql;
	
	if($con->query($sql) == true)
	{
			session_start();
		    $_SESSION['id'] = $tr_id;
		    $_SESSION['uname'] = $u_name;
	header("Location: upload_form.html");	
	}
	else
	{
		echo "ERROR: $sql <br> $con->error";
	}
	
	$con->close();	
?>