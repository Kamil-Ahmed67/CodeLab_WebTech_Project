<?php
@include 'dbcon.php';
$t_id=$_GET['updatet_id'];
$sql1="SELECT * FROM `teacher_registration` WHERE t_id=$t_id";
$result1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result1);
$fname=$row['fname'];
$lname=$row['lname'];
$uname=$row['uname'];
$dob=$row['DOB'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$password=$row['password'];

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];
	if($password == $pass1)
	{
		
		$sql = "UPDATE `teacher_registration` SET 
        `fname`='$fname',`lname`='$lname',`uname`='$uname',`DOB`='$dob',`email`='$email',`phone`=' $phone',`address`='$address ',`password`='$password'
         WHERE  t_id=$t_id ";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   echo "<i>Registration Updated Successfully!</i>";
   header('location:manage_teacher.php');
  }
	}
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Registration</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



<section class="form-container">

   <form method = "post"  enctype="multipart/form-data">
      <h3>Register New Student</h3>
      <p>First name <span>*</span></p>
      <input type="text" name="fname" placeholder="enter your first name" value=<?php echo $fname;?> required maxlength="50" class="box">
      
      <p>Last name <span>*</span></p>
      <input type="text" name="lname" placeholder="enter your last name" value=<?php echo $lname;?> required maxlength="50" class="box">

      <p>User name <span>*</span></p>
      <input type="text" name="uname" placeholder="enter your user name" value=<?php echo $uname;?> required maxlength="50" class="box">

      <p>Date of birth <span>*</span></p>
      <input type="date" name="dob" placeholder="enter your date of birth"value=<?php echo $dob;?> required maxlength="50" class="box">

      <p>E-mail <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" value=<?php echo $email;?> required maxlength="50" class="box">
      
      <p>Phone <span>*</span></p>
      <input type="text" name="phone" placeholder="enter your phone number" value=<?php echo $phone;?> required maxlength="50" class="box">
      
      <p>Address <span>*</span></p>
      <input type="text" name="address" placeholder="enter your address" value=<?php echo $address;?> required maxlength="50" class="box">
      
      <p>Password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" value=<?php echo $password;?> required maxlength="20" class="box">
      <p>Confirm password <span>*</span></p>
      <input type="password" name="pass1" placeholder="confirm your password" required maxlength="20" class="box">
      <p>select profile <span>*</span></p>
      <input type="file" accept="image/*" required class="box">
      <input type="submit" value="Update" name="submit" class="btn">
   </form>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>

