<?php

require 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die($_SERVER['REQUEST_METHOD'] . 'method is not allowed');

};

$course = $_POST['course'];
$id=$_POST['id'];
$sql="UPDATE 'courses' SET 'title'='$course' where 'id'='$id'  ";
$result = $conn->query($sql);
if ($result) {
    header('Location:edit.php');
}

