<?php 
	session_start();
    if(isset($_SESSION['logged_in'])){      
        header('location:index.php');
    }

	include 'inc/conn.php';
	include 'inc/fun.php';

	$orgall = new org;
	$orgname = $orgall->fetch_all();

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
		    $Error =  "Sign Up Successfully";
		    } else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body style="background-color:#0B243B;" >
	<div class="logsingup">		
		<div class="lsfrom" style="margin-top: 20%;">
			<div class="user"><img src="img/user.png"></div>

			<form action=" " method="POST">				
				<input type="text" name="username" placeholder="Name" >
				<input type="email" name="email" placeholder="Email" >
				<input type="text" name="phoneno" placeholder="Phone No" >
				<input type="password" name="password" placeholder="Password" >
				<input type="text" name="jobtitle" placeholder="Job Title" >

				<select name="orgname">
				  <option value="none">Organization</option>
				  <?php foreach ($orgname as $orgall) { ?>
				  	<option value="<?php echo  $orgall['orgid'];?>"><?php echo  $orgall['orgname'];?></option>
				  	<?php } ?>
				</select>

				<input type="submit"  name="signup" value="Sign Up" id="signup" >

			</form>
			<p>You are registerd? <a href="login.php">Log In</a> </p>
			<?php 
				if (isset($Error)) {
					echo "<p style='color:#04B431;'>".$Error."</p>";
					echo '<script> window.location = "login.php"; </script>';
				}
			?>

		</div>
		
	</div>
</body>
</html>

