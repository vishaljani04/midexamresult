<?php

    session_start();

    error_reporting(0);

    include('config.php'); 

    if(isset($_POST['Login'])) {

        $Enno = $_POST['Enno'];
        $Pass = $_POST['Enno'];
     

        $query = mysqli_query($conn,"SELECT * FROM result WHERE Enno = '$Enno' AND Enno = '$Pass' AND Ptm = 'Yes' ");
        $row = mysqli_fetch_array($query);

        if(is_array($row)) {
            $_SESSION["Enno"] = $row['Enno'];
            $_SESSION["Pass"] = $row['Pass'];
        } else {
            header('Location: index.php');
        }

        if(isset($_SESSION["Enno"])) {
            header('location:result.php');
        } else {
            echo '<script>';
            echo 'alert("Invalid Email");';
            echo '</script>';
            header('location:index.php');
        }
}

?>

    