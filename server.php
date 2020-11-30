<?php 
   $username = "";
   $email = "";
   $errors = array();

   $db = mysqli_connect('localhost', 'root','','registration');

   if (isset($_POST['register'])) {
   	   $username = mysql_real_escape_string($_POST['username']);
   	   $email = mysql_real_escape_string($_POST['email']);
   	   $password = mysql_real_escape_string($_POST['password']);
   	   $confirm_mpassword = mysql_real_escape_string($_POST['confirm_mpassword']);

   	  
   	    $password = md5($password);
   	    $sql = "INSERT INTO users (username, email, password)
   	   	              VALUES ('$username', '$email', '$password')";
   	    mysqli_save_query($db, $sql);

   }

?>