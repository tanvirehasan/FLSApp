
<?php 



include 'inc/header.php';

if (isset($_POST['submit'])) {

	$cvalue = $_POST['current'];
	$evalue = $_POST['expected'];
	$orgn =  $_SESSION['orgname'];


	if ($cvalue > $evalue) {
		$error = "<div class='error'><h3>please try again</h3> <p>CURRENT LEVEL <b>&#60;</b> EXPECTED LEVEL</p></div>";
	}else{

		$sql = "INSERT INTO onetoten (current, expected, userid, username, org) VALUES ('$cvalue','$evalue','$yourid','$yourname','$orgn')";
		
		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		    echo '<script> window.location = "ruselt.php"; </script>';
		    
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

 }

?>

<div class="onetoten">
	<form action="" method="post" >
		<h3>CURRENT LEVEL OF TEAMWORK</h3>
		<h4>"How well ae we doing?"</h4>

		<table>
		  <tr>
		    <th>1</th>
		    <th>2</th>
		    <th>3</th>
		    <th>4</th>
		    <th>5</th>
		    <th>6</th>
		    <th>7</th>
		    <th>8</th>
		    <th>9</th>
		    <th>10</th>
		  </tr>
		  <tr>
		    <td><input type="radio" name="current" value="1"></td>
			<td><input type="radio" name="current" value="2"></td>
			<td><input type="radio" name="current" value="3"></td>
			<td><input type="radio" name="current" value="4"></td>
			<td><input type="radio" name="current" value="5"></td>
			<td><input type="radio" name="current" value="6"></td>
			<td><input type="radio" name="current" value="7"></td>
			<td><input type="radio" name="current" value="8"></td>
			<td><input type="radio" name="current" value="9"></td>
			<td><input type="radio" name="current" value="10"></td>
		  </tr>
		 </table>


		<h3>EXPECTED LEVEL OF TEAMWORK</h3>
		<h4>"How well do we need to be doing?"</h4>

		<table>
		  <tr>
		    <th>1</th>
		    <th>2</th>
		    <th>3</th>
		    <th>4</th>
		    <th>5</th>
		    <th>6</th>
		    <th>7</th>
		    <th>8</th>
		    <th>9</th>
		    <th>10</th>
		  </tr>
		  <tr>
		    <td><input type="radio" name="expected" value="1"></td>
			<td><input type="radio" name="expected" value="2"></td>
			<td><input type="radio" name="expected" value="3"></td>
			<td><input type="radio" name="expected" value="4"></td>
			<td><input type="radio" name="expected" value="5"></td>
			<td><input type="radio" name="expected" value="6"></td>
			<td><input type="radio" name="expected" value="7"></td>
			<td><input type="radio" name="expected" value="8"></td>
			<td><input type="radio" name="expected" value="9"></td>
			<td><input type="radio" name="expected" value="10"></td>
		  </tr>
		 </table>
		 <input type="submit" name="submit" value="submit">
	</form>
</div>

<?php 
	if (isset($error)) {
		echo $error;
	}
?>


<?php include 'inc/footer.php'; ?>