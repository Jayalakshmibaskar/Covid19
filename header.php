<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid_db";
GLOBAL $conn;
$conn=mysqli_connect($servername,$username,$password,$dbname);
echo "test";
?>