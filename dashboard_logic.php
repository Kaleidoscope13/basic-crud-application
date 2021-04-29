<?php
require 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die($_SERVER['REQUEST_METHOD'] . 'method is not allowed');

}
$course = $_POST['course'];

$sql="INSERT INTO courses(title)
VALUES('$course')";
$result = $conn->query($sql);
if ($result) {
    header('Location:dashboard.php');
}