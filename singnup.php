<?php

$conn = new mysqli('sql300.epizy.com','epiz_27351460','TYFxWp7tLUo7J5i','epiz_27351460_userregistration');


$Name = $_POST['username'];
$Email = $_POST['email'];
$Pass = $_POST['password'];

$sql = "INSERT INTO user (username,email,password) VALUES('$Name','$Email','$Pass')";

if($conn->query($sql)===TRUE){
	echo include('welcome.php');
}
else{
	echo "Data not Inserted!";
}
?>