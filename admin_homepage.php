<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tutor profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="login.php" class="logo">CodeLab</a>

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
         <p class="role">Admin</p>
         <a href="Admin.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Logout</a>
            
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
    <p class="role">Admin</p>
    <a href="Admin.php" class="btn">view profile</a>
 </div>

 <nav class="navbar">
    <a href="Admin.php"><i class="fas fa-home"></i><span>Manage Teacher</span></a>
    <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Manage Student</span></a>
    <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
    <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
 </nav>


</div>

<section class="teacher-profile">

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="images/pic-1.jpg" alt="">
         <h3>Siam</h3>
         <span>Administration</span>
      </div>
      
   </div>

</section>

<section class="courses">

   <h1 class="heading">Admin Panel</h1>

   <div class="box-container">

      <div class="box">
         <div class="thumb">
            <img src="teacher management.jpg" alt="">
         </div>
         <h3 class="title">Teacher Management</h3>
         <a href="manage_teacher.php" class="inline-btn">Manage Teacher</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="Student-Management-System.jpg" alt="">
         </div>
         <h3 class="title">Student Management</h3>
         <a href="manage_student.php" class="inline-btn">Manage Student</a>
      </div>

      

   </div>

</section>


<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>