<?php

session_start();

if (isset($_SESSION['Enno']) && $_SESSION['Enno'] !== true) {
    // Redirect to home page or other authorized page
    header("Location: part.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>

<body style="overflow: hidden;">

   <!-- header section starts  -->

   <header class="header" data-aos="fade-down">

<section class="flex">

    <a href="index.html" class="logo">Bhagwan Mahavir Polytechnic.</a>

    <nav class="navbar">
        <a href=" index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href=" index.php">Login</a>
         
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>

<!-- header section ends -->

   <!-- header section ends -->

   <!-- home section starts  -->

   <div class="container home" data-aos="zoom-out">

      <section class="flex" data-aos="zoom-in" data-aos-delay="600">
         <form action="logindata.php" method="POST">
    

            <!-- <img class="img1" src="images/BMU.png"> -->
            <h3>Login Now</h3>

            <br><br>

            <h3 width="100%" height="35px" style="color:aqua; font-size: 2.3rem;">
            Bhagwan Mahavir Polytechnic 
            </h3>

            <br>

            <p>Enrollment No</p>
            <input type="text" name="Enno" placeholder="Enter Your Enrollment No" class="box" required>
            <p>Password</p>
            <input type="password" name="Pass" class="box" placeholder="Enter Your Password" required>
            <br><br>
            <button type="submit" value="submit" name="Login" class="btn btn-light btn-block">Login</button>
            <br><br>
            <!-- <input type="submit"  name="login" class="btn"> -->
            <button class="btn btn-light btn-block"><a href="temp.php" style=";color: black; onMouseOver="this.style.bg-color='black'"; onMouseOver="this.style.color='white'";">Forgot password</a></button>
         </form>

      </section>

   </div>

   <!-- home section ends -->















   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>