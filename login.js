var email = document.forms["vform"]["email"];
var password = document.forms["vform"]["password"];


var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");



email.addEventListener("blur", emailVerify, true);
password.addEventListener("blur", passwordVerify, true);

function Validate()	{
	
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