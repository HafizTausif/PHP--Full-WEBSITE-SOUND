<?php
include 'connection/conn.php';
$id = $_POST['Id'];
$aname=$_POST['aname'];
$aage=$_POST['aage'];
$ainfo = $_POST['ainfo'];
$aimg=$_FILES['aimg']['name'];
$tmp_name=$_FILES['aimg']['tmp_name'];



$q = "update artist set Artist_name='$aname',Artist_age='$aage',Artist_info='$ainfo',Artist_img='$aimg' where Artist_id=$id";
$query = mysqli_query($conn, $q);


move_uploaded_file("$tmp_name","uploads/images/"."$aimg");


header('location:artist_show.php');
?>