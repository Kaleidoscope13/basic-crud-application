<?php

require 'db_conn.php';


$id=$_GET['id'];
$sql="delete from courses where id='$id'";
$result = $conn->query($sql);

header("Location: dashboard.php");

?>