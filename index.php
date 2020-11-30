<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	   <form action="login.php" method="POST" onsubmit="return Validate()"  name="vform">
		   	<h1 class="header">Login</h1>
			<div class="input-box">
				<label>Email:</label>
				<input class="textInput" type="text" name="email" placeholder="Email">
				<div style="color:red;" id="email_error" class="val_error_1"></div>
			</div>
			<div class="input-box">
				<label>Password:</label>
				<input class="textInput" type="password" name="password" placeholder="Password">
				<div style="color:red;" id="password_error" class="val_error_1"></div>
			</div>
			<div class="input-box">
				<button type="submit" name="login" value="login" class="btn_1">Login</button>
			</div>
			<p style="color: red;">
				Not yet a member? <a style="color: violet; "href="register.php">Sign up</a>
			</p>
	   </form>
	</div>

	<script type="text/javascript" src="login.js"></script>
</body>
</html>
