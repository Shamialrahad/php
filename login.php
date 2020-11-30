<?php
session_start();

$con = mysqli_connect('sql300.epizy.com','epiz_27351460','TYFxWp7tLUo7J5i');

mysqli_select_db($con, 'epiz_27351460_userregistration');

$Email = $_POST['email'];
$Pass = $_POST['password'];

$s = " select * from user where Email = '$Email' && password = '$Pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	header('location:welcome.php');
}
else{
	header('location:error.php');
}
?>