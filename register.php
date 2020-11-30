<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	   <form  action="singnup.php"  method="POST" onsubmit="return Validate()" name="vform">
	   	<h1 class="header">Registration</h1>
		<div class="input-box">
			<label>Username:</label>
			<input class="textInput"  type="text" name="username" placeholder="username">
			<div style="color:red;" id="name_error" class="val_error"></div>
		</div>
		<div class="input-box">
			<label>Email:</label>
			<input class="textInput" type="text" name="email" placeholder="Email">
			<div style="color:red;" id="email_error" class="val_error"></div>
		</div>
		<div class="input-box">
			<label>Password:</label>
			<input class="textInput" type="password" name="password" placeholder="Password">
			<div style="color:red;" id="password_errors" class="val_error"></div>
		</div>
		<div class="input-box">
			<label>Confirm Password:</label>
			<input class="textInput" type="password" name="confirm_password" placeholder="password confirmation">
			<div style="color:red;" id="password_error" class="val_error"></div>
		</div>
		<div class="input-box">
			<button type="submit" value="Ragister" name="register" class="btn">Register</button>
		</div>
	   </form>
	</div>

	<script type="text/javascript" src="index.js"></script>
</body>
</html>