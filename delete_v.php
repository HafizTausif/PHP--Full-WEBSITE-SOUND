<?php
include 'connection/conn.php';
$id = $_GET['id'];
$q = "delete from videos where id=$id";
$query = mysqli_query($conn, $q);
header('location:videoshow.php');


?>