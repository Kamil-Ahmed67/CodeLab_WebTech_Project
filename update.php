<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">CodeLab</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <p class="role">student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="newhome.html" class="option-btn">Logout</a>
            
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <p class="role">student</p>
      <a href="Student_profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="form-container_Update">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>update profile</h3>
      <p>Update Name</p>
      <input type="text" name="fname" placeholder="Enter Name" maxlength="50" class="box">
      <p>Username</p>
      <input type="text" name="uname" placeholder="Enter a new username" maxlength="50" class="box">
      <p>Update E-mail</p>
      <input type="email" name="email" placeholder="Enter a new e-mail" maxlength="50" class="box">
      <p>New Password</p>
      <input type="password" name="new_pass" placeholder="enter your new password" maxlength="20" class="box">
      <p>Confirm PSassword</p>
      <input type="password" name="c_pass" placeholder="confirm your new password" maxlength="20" class="box">
      <p>Update PSic</p>
      <input type="file" accept="image/*" class="box">
      <input type="submit" value="update profile" name="submit" class="btn">
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
   $uname = $_POST['uname'];
   $email = $_POST['email'];
	$new_pass = $_POST['new_pass'];
   $c_pass = $_POST['c_pass'];

	if($new_pass == $c_pass)
	{
		
		$sql = "UPDATE `student_registration` SET
       `fname`='$fname',`uname`='$uname',`email`='$email',`password`='$new_pass'
       WHERE uname=$uname ";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   echo "<i>Registration Completed Successfully!</i>";
   header('location:student_homepage.php');
  }
	}
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
?>


