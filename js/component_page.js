function checkTitle(clicked_id) {
	var compTitle = clicked_id;
	if (compTitle == "Cpu") {
		alert("1");
		document.getElementById("demo").innerHTML = "hullo";
	}
	
	if (compTitle == "Gpu") {
		alert("2");
	}
	
	if (compTitle == "Ram") {
		alert("3");
	}
	
	if (compTitle == "MBoard") {
		alert("4");
	}
	
	if (compTitle == "PowSup") {
		alert("5");
	}
}

function AddContent() {
	var content = '<div class="col-auto">\
								<img src="images/homepage/motherboard_homepage.png" style="height:100px;" alt="CPU Logo">\
								<p>CPU\
								<br>RM600</p>\
							</div>';
							
	var i;
	for (i = 0; i < 5; i++) {
	document.write(content);
	}
}