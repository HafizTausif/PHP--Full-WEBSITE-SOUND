<?php
include 'connection/conn.php';
$id = $_GET['id'];
$q = "delete from songs where id=$id";
$query = mysqli_query($conn, $q);
header('location:Admin_show.php');


?>