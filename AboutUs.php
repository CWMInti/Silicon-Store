<!DOCTYPE html>
<html lang="en">
<head>
	<title>Silicon Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />​
	<script src="js/feedback_form.js"></script>
</head>

<body>
	<div class="container">
		<div class="header">
			<div class="row align-items-center">
				<div class="col">
					<div id="logo">
						<img src="images/SiliconStoreLogo.png" style="width:115px;height:115px;" alt="Silicon News Garden Logo">
					</div>
				</div>
				<div class="col">
					<div id="webname">
						<h1>Silicon Store</h1>
					</div>
				</div>
				<div class="col">
					<div id="account-selection">
						<a href="Login.php">Login</a><br>
						<a href="SignUp.php">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
			
		<div class="nav">
			<div class="row">
				<div class="col">
					<div id="homepage-button">
						<a href="Homepage.php">Homepage</a>
					</div>
				</div>
				<div class="col">
					<div id="cart-button">
						<a href="Cart.php">Cart</a>
					</div>
				</div>
				<div class="col">
					<div id="about-us-button">
						<a href="AboutUs.php">About_Us</a>
					</div>
				</div>
			</div>
		</div>
	
		<div class="page">
			<div class="row">
				<div class="col">
					<h2 class="h2">About Us</h2><br>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<h3>What is this website about?</h3>
					<p>This is the place where you can get the best components for your PC! We sell CPU, GPU, Motherboard, RAM and more!
					<br>All the prices of the components are retail, so you can enjoy lower price, compared to other PC components store.</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<h3>Developer:</h3>
					<p>Chung Wei Ming</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<h3>Want to provide feedback? Use the form below:</h3>
					<form name="feedbackForm" action = "php/feedback_form.php" method = "POST">
						<label for="title">Title:</label><br>
						<input type="text" id="feedback_title" name="feedback_title"><br><br>
						
						<textarea id="feedback_content" name="feedback_content" rows="10" cols="40"></textarea><br>
						
						<input type="submit" value="submit">
					</form>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="row">
				<div class="col">
					<p>Silicon Store 2021</p>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>