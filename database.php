<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "Complete Responsive Website Portfolio";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("something went wrong!");
}

?>
