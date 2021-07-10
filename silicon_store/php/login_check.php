<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
	$cookie_name = "userlogin";
      
	$table_sql = "CREATE TABLE login (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(30) NOT NULL,
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";

	$con->query($table_sql) === TRUE;
      
	$sql = "select *from login where username = '$username' and password = '$password'";  
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result);
	  
	if($count == 1){  
		echo "<h1><center> Login successful </center></h1>";
		echo "<h2><center><a href='../Homepage.php'>Back to Homepage</a><center></h2>";
		setcookie($cookie_name, $username, time() + (86400 * 30), "/");
	}  
	else{  
		echo "<h1><center> Login failed. Invalid username or password. </center></h1>";
		echo "<h2><center><a href='../Login.php'>Back to Login</a><center></h2>";
	}     
?>  