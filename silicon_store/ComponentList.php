<!DOCTYPE html>
<html lang="en">
<head>
	<title>Silicon Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />​
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
					<h2 class="h2">Product List</h2><br>
				</div>
			</div>
			
			<div class="row justify-content-center">
					<?php
						include('php/connection.php');  
						$title = $_GET['title'];
						$query = "select * from ".$title;
						$pg_result = mysqli_query($con, $query);
						
						while ($products = mysqli_fetch_assoc($pg_result)) {
					?>
						<div class="col-auto">
							<p>
								<?php echo $products["prod_name"]; ?>
								<br><?php echo $products["price"]; ?>
							</p>
						</div>
					<?php
						}
					?>
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