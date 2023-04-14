<?php

    include('config.php');

    $a = $_POST['Name'];
    $b = $_POST['enno'];
    $c = $_POST['Message'];

    $str = "insert into contact(Name, enno, Message) values('$a','$b','$c')";

    mysqli_query($conn,$str);

    echo '<script>alert("Your Message is Submitted We Will Back To again Within a 12 Hours ");</script>';

    header("location:contact.php");

?>