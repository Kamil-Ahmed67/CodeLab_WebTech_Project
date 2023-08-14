<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
	<center>
		<fieldset>
			<form method="post" action="add_student.php">
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" placeholder="Enter your first name" required>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" placeholder="Enter your last name" required>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="uname" placeholder="Enter your user name" required>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male" required> Male
							<input type="radio" name="gender" value="Female" required> Female 
						</td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter your email" required>
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td><input type="tel" name="number" placeholder="Enter your phone number" required>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea name ="address" placeholder="Enter your address" required></textarea></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass1" placeholder="Enter your password" required>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="pass2" placeholder="Enter your password again" required>
					</tr>
				</table>
				<input type="submit" name="signup" value="Signup">
				<!--<input type="submit" name="back" value="Back">-->
			</form>
<?php
   @include 'dbcon.php';
	if(isset($_POST['signup']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$address = $_POST['address'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		if($pass1 == $pass2)
		{
			
			$sql = "INSERT INTO student_registration(fname, lname, uname,gender, email, phone, address, password) VALUES ('$fname','$lname', '$uname', '$gender', '$email', '$number', '$address', '$pass1')";
			$result=mysqli_query($conn,$sql);
      if($result)
      {
        header('location:manage_s.php');
      }
		}
		else
		{
			echo "<i>Password doesn't match</i>";
		}
	}
?>
			<br>
			<form method="post" action="reg.php">
				<input type="submit" name="back" value="Back">
			</form>
		</fieldset>
	</center>
</body>
</html>