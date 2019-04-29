<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_kost";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>