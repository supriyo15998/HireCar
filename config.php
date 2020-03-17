<?php
session_start();
#connection code
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'hirecar';
$conn = mysqli_connect($host,$user,$pass,$dbname) or die(mysqli_error($conn));
// var_dump($conn);



?>