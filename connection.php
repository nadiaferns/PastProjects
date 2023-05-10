<?php
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "madf_project";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>