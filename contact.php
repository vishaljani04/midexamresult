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
   <title>Contact</title>

   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

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

    <!-- header section ends -->
   <!-- contact section starts  -->

   <div class="container contact">

      <h1 class="heading" data-aos="zoom-out">contact us</h1>

      <section>

         <div class="row">

         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4322.14070016353!2d72.79181921529974!3d21.14025718593804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be052708237f9df%3A0x3edeabd1c2aabf5a!2sBhagwan%20Mahavir%20Polytechnic!5e1!3m2!1sen!2sin!4v1681034168261!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="contactdata.php" method="post" data-aos="flip-right">
               <h3>get in touch</h3>
               <input type="text" name="Name" required maxlength="50" placeholder="enter your name" class="box">
               <input type="text" name="enno" required maxlength="50" placeholder="enter your Enrollemt No" class="box">
               <textarea name="Message" class="box" required maxlength="1000" cols="30" rows="10" placeholder="Write any Suggestion or Problem"></textarea>
               <input type="submit" value="send message" name="send" class="btn">
            </form>

         </div>

         <div class="grid">

            <div class="box" data-aos="fade-up">
               <i class="fas fa-phone"></i>
               <h3>phone number</h3>
               <a>Mr. Jay Shah</a>
               <a href="tel:9033950546">9033950546</a>
            </div>

            <div class="box" data-aos="fade-up">
               <i class="fas fa-envelope"></i>
               <h3>email address</h3>
               <a>Mr. Jay Shah</a>
               <a href="mailto:jay.shah@bmusurat.ac.in">jay.shah@bmusurat.ac.in</a>
            </div>

            <div class="box" data-aos="fade-up">
               <i class="fas fa-map-marker-alt"></i>
               <h3>College address</h3>
               <a href="#">Bhagwan Mahavir Polytechnic , VIP Road , Vesu , Surat </a>
            </div>

         </div>

         <div class="credit">
            &copy; copyright @ 2023 by <span>Bhagwan Mahavir Polytechnic</span> | all rights reserved!
         </div>

      </section>

   </div>

   <!-- contact section ends -->















   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>