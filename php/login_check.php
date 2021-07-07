<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
	$cookie_name = "userlogin";
      
        //to prevent from mysqli injection
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
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