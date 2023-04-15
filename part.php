<?php
session_start();
include('config.php');
if (!isset($_SESSION['Enno']) )
{
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
    <?php 
                            if(isset($_SESSION['Enno'])) {
                                $Enrollment = $_SESSION['Enno'];
                                $query = "SELECT * FROM result WHERE Enno = '$Enrollment' ";
                                $result = $conn->query($query);

                                if($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                     echo '<title>'.$row["Name"].'</title>';
                                }
                            }
                        ?>

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
                <a href="contact.php">contact</a>
                
                <?php
                if(isset($_SESSION['Enno'])== true) {  
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

   <!-- tours section starts  -->

   <div class="container tours">

      <h1 class="heading" data-aos="zoom-out">Results</h1>

      <section class="grid">

         <div class="box" data-aos="fade-up">
            <div class="price"></i><span>Mid Exam</span></div>
            <img src="images/BMU.png" class="image" alt="">
            <h3 class="name">SEM 6 Mid</h3>
            <p class="address">Your Mid Exam Result Was Delared</p>
            <a href="result.php" class="btn">Show Result</a>
         </div>

         <div class="box" data-aos="fade-up">
            <p class="price"></i><span>Re-mid Exam</span></p>
            <img src="images/BMU.png" alt="" class="image" >
            <h3 class="name">SEM 6 Re-Mid</h3>
            <p class="address">Re-mid Exam Result Will Be Declare</p>
            <a href="temp1.php" class="btn">Show Result</a>
         </div>

      </section>

   </div>

   <!-- tours section ends -->














   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>