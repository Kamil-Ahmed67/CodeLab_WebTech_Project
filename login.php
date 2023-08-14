<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">CodeLab</a>
        <ul class="nav_items">
          <li class="nav_item">
            <a href="HomePage.php" class="nav_link">Home</a>
            <a href="courses.php" class="nav_link">Courses</a>
            <a href="about.php" class="nav_link">About Us</a>
            <a href="contact.php" class="nav_link">Contact</a>
          </li>
        </ul>
        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <!-- Home -->

    <section class="home">

      <div class="form_container">

        <i class="uil uil-times form_close"></i>

        <!-- Login From -->

        <div class="form login_form">

          <form method = "post" action ="login.php">

            <h2>Login</h2>

            <div class="input_box">

              <input type="text" name="username" placeholder="Enter your username" required />

              <i class="uil uil-envelope-alt email"></i>

            </div>

            <div class="input_box">

              <input type="password" name="password" placeholder="Enter your password" required />

              <i class="uil uil-lock password"></i>

              <i class="uil uil-eye-slash pw_hide"></i>

            </div>


            <div class="option_field">

              <span class="checkbox">

                <input type="checkbox" id="check" />

                <label for="check">Remember me</label>

              </span>

              <div class="login_signup"><a href="forget_password.php" id="forgot_pw">Forgot password?</a></div>

            </div>

            <button class="button" name="login" value="Login">Login Now</button>

            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>

          </form>

        </div>


        <!-- Signup From -->

        <div class="form signup_form">

          <form method = "post" action ="login.php">

            <h2>Signup</h2>

            <div class="input_box">

              <input type="text" name="username" placeholder="Enter your usename" required />

              <i class="uil uil-envelope-alt email"></i>

            </div>

            <div class="input_box">

              <input type="password" name="password" placeholder="Create password" required />

              <i class="uil uil-lock password"></i>

              <i class="uil uil-eye-slash pw_hide"></i>

            </div>
            <div class="input_box">

              <input type="password" name="pass1" placeholder="Confirm password" required />

              <i class="uil uil-lock password"></i>

              <i class="uil uil-eye-slash pw_hide"></i>

            </div>
            <button class="button" name="signup">Signup Now</button>
            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
    


</section>

    

    <script src="script.js"></script>

  </body>
</html>  







<?php
     @include 'dbcon.php';
    if(isset($_POST['login']))

    {
        session_start();
        $uname = $_POST['username'];
        $password = $_POST['password'];
        //SQL
        $sql1 = "SELECT * from student_registration where uname = '$uname' AND password = '$password'";
        $sql2 = "SELECT * from teacher_registration where uname = '$uname' AND password = '$password'";
        $sql3 = "SELECT * from admin_registration where uname = '$uname' AND password = '$password'";
        //Verify SQL with database connection
        $varify1 = mysqli_query($conn, $sql1);
        $varify2 = mysqli_query($conn, $sql2);
        $varify3 = mysqli_query($conn, $sql3);
        if(mysqli_num_rows($varify1) == 1) //1 row return
        {
            $_SESSION['uname'] = $uname;
            //print("<center>Login Successfull!</center>");
            //cookies implementation
            header("location: student_homepage.php");
        }
        elseif(mysqli_num_rows($varify2) == 1)
        {
            $_SESSION['uname'] = $uname;
            //print("<center>Login Successfull!</center>");
            //cookies implementation
            header("location: teacher_homepage.php");
        }
        elseif(mysqli_num_rows($varify3) == 1)
        {
            $_SESSION['uname'] = $uname;
            //print("<center>Login Successfull!</center>");
            //cookies implementation
            header("location: admin_homepage.php");
        }

        else
        {
            print("<center>Wrong username/password!</center>");
            echo ("<center><a href= 'changepass.php'>Forget Username/Password?</a></center>");
        }
    }

?>
<?php
@include 'dbcon.php';
if(isset($_POST['signup']))
{
	$uname = $_POST['username'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];
	if($password == $pass1)
	{
		
		$sql = "INSERT INTO student_registration(uname, password) VALUES ('$uname', '$password')";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
	header('location:login.php');
  }
	}
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
?>