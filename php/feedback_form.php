<?php      
    include('connection.php');
	
	$table_sql = "CREATE TABLE userFeedback (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		feedbackTitle VARCHAR(50) NOT NULL,
		feedbackContent VARCHAR(5000) NOT NULL,
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";
		
	$con->query($table_sql) === TRUE;
	
	if ($_COOKIE == null) {
		echo "<h1><center>You need to login before you can providefeedback.</center></h1>";
		echo "<h2><center><a href='../Login.php'>Go to Login</a><center></h2>";
		echo "<h2><center><a href='../SignUp.php'>New? Sign up here</a><center></h2>";
	} else if (!$_COOKIE == null){
		$current_user = $_COOKIE['userlogin'];
		$feedback_title = $_POST['feedback_title'];
		$feedback_content = $_POST['feedback_content'];
		
		if ($feedback_title == '') {
			echo "<h1><center>Your feedback form doesn't have a title.</center></h1>";
			echo "<h2><center><a href='../AboutUs.php'>Check your feedback form again</a><center></h2>";
		} else if (!$feedback_title == '') {
			if ($feedback_content == '') {
				echo "<h1><center>Looks like your feedback form is empty....</center></h1>";
				echo "<h2><center><a href='../AboutUs.php'>Check your feedback form again</a><center></h2>";
			} else if (!$feedback_content == '') {
				$sql = "INSERT INTO userFeedback (username, feedbackTitle, feedbackContent) VALUES ('$current_user', '$feedback_title', '$feedback_content')";
				
				if ($con->query($sql) === TRUE) {
					echo "<h1><center>Hi $current_user, thanks for your feedback!</center></h1>";
					echo "<h2><center>Your feedback:</center></h2>";
					echo "<h3><center>Title: $feedback_title</center></h3>";
					echo "<h3><center>$feedback_content</center></h3>";
					echo "<h2><center><a href='../Homepage.php'>Back to Homepage</a><center></h2>";
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}
			}
		}
	}
?>  