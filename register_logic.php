<?php
require '../db_conn.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die($_SERVER['REQUEST_METHOD'] . 'method is not allowed');

}

$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];


$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";
$result = $conn->query($sql);