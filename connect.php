<?php
$servername = "localhost";
$username = "root1";
$password = "no";
$db = "bussiness" ;


$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysql_connect());



mysqli_select_db($conn,$db);
?>