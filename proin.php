<?php
	
	include 'inc/conn.php';
	if (isset($_POST['signup'])) {

		$name 		= $_POST['username'];
		$email 		= $_POST['email'];
		$phoneno 	= $_POST['phoneno'];
		$password 	= $_POST['password'];
		$jobtitle 	= $_POST['jobtitle'];
		$orgname 	= $_POST['orgname'];
		$profilepic = "user.png";

		$sql = "INSERT INTO user (username, email,phoneno,password,orgname,jobtitle,profilepic) VALUES ('$name', '$email', '$phoneno', '$password','$orgname','$jobtitle', '$profilepic')";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		    } else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>