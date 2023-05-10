<!--
Into this file, we create a layout for login page.
-->

<?php
require_once('connection.php');
$email = $password = $pwd = '';

$uname = $_POST['uname'];
$pwd = $_POST['psw'];
//$password = MD5($pwd);
$sql = "SELECT * FROM teachers WHERE username='$uname';";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["tr_id"];
		$uname = $row["username"];
		$pass = $row["password"];
		if($pwd == $pass){
			session_start();
		    $_SESSION['id'] = $id;
		    $_SESSION['uname'] = $uname;
		}
	}
	header("Location: upload_form.html");
}
else
{
	echo "Invalid username or password";
}