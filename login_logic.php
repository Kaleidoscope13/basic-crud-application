<?php
require '../db_conn.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die($_SERVER['REQUEST_METHOD'] . 'method is not allowed');

}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if (!$result) {
    header('Location:../forms/login.php');
}else{
    header('location:../dashboard.php');
}
