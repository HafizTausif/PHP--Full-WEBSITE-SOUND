<?php
include 'connection/conn.php';
$id = $_GET['Artist_id'];
$q = "delete from artist where Artist_id=$id";
$query = mysqli_query($conn, $q);
header('location:artist_show.php');


?>