<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Show Teacher Info</title>
  </head>
  <body>
  <center><h2 style="-webkit-text-fill-color:hsl(234, 92%, 33%);font-family:sans-serif ;"><b>Teachers Information</b></h2></center>
    <div class="container my-5">
     <button class="btn btn-primary"><a href="teacher_registration.php" class="text-light"> Add New Teacher
     </a></button>
    <table class="table table-striped table-hover  my-5" border= "3">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
     @include 'dbcon.php';
      $sql=" SELECT *FROM teacher_registration";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        while($row=mysqli_fetch_assoc($result))
        {
            $t_id=$row['t_id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $uname=$row['uname'];
            $dob=$row['DOB'];
            $gender=$row['gender'];
            $email=$row['email'];
            $phone=$row['phone'];
            $address=$row['address'];
            $password=$row['password'];

            echo '<tr>
            <th scope="row">'.$t_id.'</th>
            <td>'. $fname.'</td>
            <td>'. $lname.'</td>
            <td>'. $uname.'</td>
            <td>'. $dob.'</td>
            <td>'. $gender.'</td>
            <td>'. $email.'</td>
            <td>'. $phone.'</td>
            <td>'. $address.'</td>
            <td>'. $password.'</td>
            <td>
            <button class="btn btn-primary"><a href="update_teacher.php?updatet_id='.$t_id.' " class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete_teacher.php?deletet_id='.$t_id.' " class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
      }
    ?>
  </tbody>
</table>
</div>
  </body>
</html>