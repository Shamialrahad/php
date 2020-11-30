<?php

session_start();
header('location:register.php');

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'user_registration');

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from user where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username already Taken";
}
else{
	$reg = " insert into user(username , email , password) values ('$name' , '$email' , '$pass')";
	mysqli_query($con, $reg);
	echo "registration Successful";
}
?>