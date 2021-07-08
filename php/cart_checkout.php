<script>
	function ClearCart() {
	localStorage.clear();
	}
</script>

<?php      
    include('connection.php');
	
	$table_sql = "CREATE TABLE purchases (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		userPurchase VARCHAR(5000) NOT NULL,
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";
		
	$con->query($table_sql) === TRUE;
	
	if ($_COOKIE == null) {
		echo "<h1><center>You need to login before you can checkout.</center></h1>";
		echo "<h2><center><a href='../Login.php'>Go to Login</a><center></h2>";
		echo "<h2><center><a href='../SignUp.php'>New? Sign up here</a><center></h2>";
	} else if (!$_COOKIE == null){
		$current_user = $_COOKIE['userlogin'];
		$explode_list = explode('     ', $_POST['list']);
		$list = implode('<br/>', $explode_list);
		
		if ($list == '') {
			echo "<h1><center>Looks like your cart is empty....</center></h1>";
			echo "<h2><center><a href='../Cart.php'>Check your cart</a><center></h2>";
		} else if (!$list == '') {
			$sql = "INSERT INTO purchases (username, userPurchase) VALUES ('$current_user', '$list')";
			
			if ($con->query($sql) === TRUE) {
				echo "<h1><center>Receipt</center></h1>";
				echo "<h2><center>$current_user</center></h3>";
				echo "<h3><center>$list</center></h3>";
				echo "<h2><center><a href='../Homepage.php' onclick='ClearCart()'>Back to Homepage</a><center></h2>";
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
		}
	}
?>  