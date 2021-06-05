function validate() {
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var repassword = document.getElementById("repassword").value;
	
	if (email == "" || password == "" || repassword == "") {
		alert ("Please fill in all the required fields");
	}
	
	else if (repassword == password) {
		alert ("Sign up successfully");
		window.location.href = "Login.html";
		return false;
	}

	else if (repassword != password){
		alert("Password and repeat password don't match");
	}
}