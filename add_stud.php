
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

    <title>Add New Students</title>
  </head>
  <body>
    <div class="cntainer my-5">
    <form method="POST">
    <div class="form-group">
    <label><b>First Name</b></label>
    <input type="text" class="form-control" name="fname" placeholder="Enter your username">
  </div>
  <div class="form-group">
    <label><b>Last Name</b></label>
    <input type="text" class="form-control" name="lname" placeholder="Enter your last name">
  </div>
  <div class="form-group">
    <label><b>Username</b></label>
    <input type="text" class="form-control" name="uname" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label><b>Gender</b></label>
    <input type="radio"class="form-control" name="gender" value="Male" required> Male
    <input type="radio"class="form-control" name="gender" value="Female" required> Female
  </div>
  <div class="form-group">
    <label><b>Email</b></label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label><b>Phone Number</b></label>
    <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
  </div>
  <div class="form-group">
    <label><b>Address</b></label>
    <input type="text" class="form-control" name="address" placeholder="Enter address">
  </div>
  <div class="form-group">
    <label><b>Password</b></label>
    <input type="password" class="form-control" name="pass1" placeholder="Set a new password">
  </div>
  <div class="form-group">
    <label><b>Confirm Password</b></label>
    <input type="password" class="form-control" name="pass2" placeholder="Confirm Password">
  </div>
  <div class="form-group">
  <center><input type="submit" class="btn btn-primary" name= "add" value="Add Student"><center>
   </div>
   </form>
   </div>

  <?php
  @include 'dbcon.php';

if (isset($_POST["add"]))
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
    if($pass1==$pass2)
    {

        $sql = "INSERT INTO `student_registration`(`fname`, `lname`, `uname`, `gender`, `email`, `phone`, `address`, `password`)
         VALUES (' $fname','$lname','$uname','$gender','$email','$phone','$address','$pass1')";
         $result=mysqli_query($conn,$sql);
         if($result)
         {
           echo"DATA INSERTED SUCCESSFULLY";
         }
        else
        {
          echo"SOMETHING WENT WRONG";
        }
    }
    else
    {
        echo"Incorrect Password!Please Try Again";
    }
}

?>
  </body>
</html>