function AddContent() {
	var content = '<div class="col-auto">\
								<img src="images/homepage/motherboard_homepage.png" style="height:100px;" alt="CPU Logo">\
								<p>CPU\
								<br>RM600</p>\
							</div>'
							
	var i;
	for (i = 0; i < 5; i++) {
	document.write(content);
	}
}