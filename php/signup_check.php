<?php      
    include('connection.php');  
    $username = $_POST['username']; 
	$password = $_POST['password'];  
    $repassword = $_POST['repassword'];  
	
	$table_sql = "CREATE TABLE login (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(30) NOT NULL,
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";

	$con->query($table_sql) === TRUE;
	
	$userchecksql = "select *from login where username = '$username'";  
	$result = mysqli_query($con, $userchecksql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$user_check = mysqli_num_rows($result);  
	 
	if($username == "" || $password == "" || $repassword == ""){  
		echo "<h1><center> Sign up failed. Invalid username, password or repeat password. </center></h1>";
		echo "<h2><center><a href='../SignUp.php'>Back to Sign Up</a><center></h2>";
	}     
	else if($user_check == 1){  
		echo "<h1><center> It looks like you already sign up </center></h1>";
		echo "<h2><center><a href='../Login.php'>Go to Login</a><center></h2>";
	}
	else if($password == $repassword){
		$sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
		
		if ($con->query($sql) === TRUE) {
			echo "<h1><center> Sign up successfull </center></h1>";
			echo "<h2><center><a href='../Login.php'>Go to Login</a><center></h2>";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}
	else{  
		echo "<h1><center> Sign up failed. Invalid username, password or repeat password. </center></h1>";
		echo "<h2><center><a href='../SignUp.php'>Back to Sign Up</a><center></h2>";
	}
?>  