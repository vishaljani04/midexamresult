<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="resultbmp";

// $hostname ="sql105.epizy.com";
// $username ="epiz_33968739";
// $password ="lvjAvzlXcqzksJ";
// $database ="epiz_33968739_resultbmp";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Not Connect");
$dbconfig = mysqli_select_db($conn, $database);

if ($dbconfig) {
    //Connected;
} else {
    echo " Data base not Connected";
}

?>