function validate() {
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	
	if (email == "" || password == "") {
		alert ("Please enter email and password");
	}
	
	else if (email == "form" && password == "123") {
		alert ("Login successfully");
		window.location.href = 'google.com';
		return false;
	}

	else {
		alert("Wrong email or password");
	}
}