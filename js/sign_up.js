function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var login = getCookie("userlogin");
  if (login != "") {
    document.getElementById("signupbtn").disabled = true;
  }
}

function validate() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var repassword = document.getElementById("repassword").value;
	
	if (username == "" || password == "" || repassword == "") {
		alert ("Please fill in all the required fields");
	}

	else if (password != repassword){
		alert("Password and repeat password don't match");
	}
}