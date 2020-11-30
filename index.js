var username = document.forms["vform"]["username"];
var email = document.forms["vform"]["email"];
var password = document.forms["vform"]["password"];
var confirm_password = document.forms["vform"]["confirm_password"];

var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");
var password_errors = document.getElementById("password_errors");

username.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", emailVerify, true);
password.addEventListener("blur", passwordVerify, true);

function Validate()	{
	if (username.value == "") {
		username.style.border = "3px solid red";
		name_error.textContent = "(!) Username is required";
		username.focus();
		return false;
	}
	if (email.value == "") {
		email.style.border = "3px solid red";
		email_error.textContent = "(!) Email is required";
		email.focus();
		return false;
	}
	if (password.value == "") {
		password.style.border = "3px solid red";
		password_error.textContent = "(!) password is required";
		password.focus();
		return false;
	}
	if (password.value != confirm_password.value) {
	password.style.border = "3px solid #5E6E66";
	confirm_password.style.border = "3px solid #5E6E66"
	password_error.innerHTML = "Password do not match";
	password_errors.innerHTML = "Password do not match";
	return false;
}

}

function nameVerify(){
	if (username.value != "") {
		username.style.border = "3px solid #5E6E66";
		name_error.innerHTML = "";
		return true;
	}
}
function emailVerify(){
	if (email.value != "") {
		email.style.border = "3px solid #5E6E66";
		email_error.innerHTML = "";
		return true;
	}
}
function passwordVerify(){
	if (password.value != "") {
		password.style.border = "3px solid #5E6E66";
		password_error.innerHTML = "";
		return true;
	}
}