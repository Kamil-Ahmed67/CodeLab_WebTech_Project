<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register new student</h3>
      <p>First name <span>*</span></p>
      <input type="text" name="fname" placeholder="enter your first name" required maxlength="50" class="box">
      
      <p>Last name <span>*</span></p>
      <input type="text" name="lname" placeholder="enter your last name" required maxlength="50" class="box">

      <p>User name <span>*</span></p>
      <input type="text" name="uname" placeholder="enter your user name" required maxlength="50" class="box">

      <p>Date of birth <span>*</span></p>
      <input type="date" name="dob" placeholder="enter your date of birth" required maxlength="50" class="box">
      
      <p>Gender <span>*</span></p>
      <P><input type="radio" name="gender" value="Male" required> Male     
      <input type="radio" name="gender" value="Female" required> Female</p>

      <p>E-mail <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      
      <p>Phone <span>*</span></p>
      <input type="text" name="phone" placeholder="enter your user name" required maxlength="50" class="box">
      
      <p>Address <span>*</span></p>
      <input type="text" name="address" placeholder="enter your address" required maxlength="50" class="box">
      
      <p>Password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
      <p>Confirm password <span>*</span></p>
      <input type="password" name="pass1" placeholder="confirm your password" required maxlength="20" class="box">
      <p>select profile <span>*</span></p>
      <input type="file" accept="image/*" required class="box">
      <input type="submit" value="register new" name="submit" class="btn">
      <input type="submit" value="Cancel" name="Back" class="btn">

   </form>

</section>






<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>
<?php
@include 'dbcon.php';
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];
	if($password == $pass1)
	{
		
		$sql = "INSERT INTO `student_registration`(`fname`, `lname`, `uname`, `DOB`, `gender`, `email`, `phone`, `address`, `password`)
       VALUES
        ('$fname',' $lname','$uname','$dob ','$gender','$email','$phone','$address','$password')";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   header('location:manage_student.php');;
  }
	}
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
?>
<?php
 if(isset($_POST['Back']))
 {
   header('location:manage_student.php');
 }
?>