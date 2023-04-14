<?php 

session_start();
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About</title>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="header" data-aos="fade-down">

  <section class="flex">

     <a href="index.html" class="logo">Bhagwan Mahavir Polytechnic.</a>

     <nav class="navbar">
        <a href=" index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <?php
            if(isset($_SESSION['Enno'])== true) { 
                echo '<a href="result.php">Result</a>'; 
                echo '<a href="logout.php">Logout</a>';
            } else {
                echo '<a href=" index.php">Login</a>';
            }
            ?>
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>

  </section>

</header>

<!-- about section starts  -->

<div class="container about">

  <h1 class="heading" data-aos="zoom-out">about us</h1>

  <section>

     <div class="details">
        <div class="box" data-aos="zoom-in">
           <h3>What is this Site ?</h3>
           <p style="font-size:1.7rem;">Hello ! IT Department This Website Only For the Declare Of Mid Exam Result and In this Website You will see Your Mid Exam Result and Also Download Your In PDF Format So Enjoy your Result And Best of Luck of Next Exam. Please Click the Contact Us Button and Give a Feedback Our Website & Face any Problem Than Contact us / Call / Mail etc. We will Reply within 12 Hours.<br>Thank You.</p>
           <a href="contact.php" class="btn">Contact us</a>
        </div>
     </div>

     <!-- <div class="grid">

        <div class="box" data-aos="fade-up">
           <img src="images/about-img-1.svg" alt="">
           <h3>easy bookings</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sed blanditiis.</p>
        </div>

        <div class="box" data-aos="fade-up">
           <img src="images/about-img-2.svg" alt="">
           <h3>travel world</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sed blanditiis.</p>
        </div>

        <div class="box" data-aos="fade-up">
           <img src="images/about-img-3.svg" alt="">
           <h3>enjoy tours</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sed blanditiis.</p>
        </div>

     </div> -->

  </section>

</div>

<!-- about section ends -->

<!-- reviews section starts  -->

<!-- <div class="container reviews">

  <h1 class="heading" data-aos="zoom-out">client's reviews</h1>

  <section class="grid">

     <div class="box" data-aos="zoom-in">
        <img src="images/pic-1.png" alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta
           modi iure, quod numquam nesciunt aspernatur.</p>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
        </div>
     </div>

     <div class="box" data-aos="zoom-in">
        <img src="images/pic-2.png" alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta
           modi iure, quod numquam nesciunt aspernatur.</p>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
        </div>
     </div>

     <div class="box" data-aos="zoom-in">
        <img src="images/pic-3.png" alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta
           modi iure, quod numquam nesciunt aspernatur.</p>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
        </div>
     </div>

     <div class="box" data-aos="zoom-in">
        <img src="images/pic-4.png" alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta
           modi iure, quod numquam nesciunt aspernatur.</p>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
        </div>
     </div>

     <div class="box" data-aos="zoom-in">
        <img src="images/pic-5.png" alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta
           modi iure, quod numquam nesciunt aspernatur.</p>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
        </div>
     </div>

     <div class="box" data-aos="zoom-in">
        <img src="images/pic-6.png" alt="">
        <h3>john deo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta
           modi iure, quod numquam nesciunt aspernatur.</p>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
        </div>
     </div>

  </section>

</div> -->

<!-- reviews section ends -->













<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

</html>