<?php
include 'connection/conn.php';
$id = $_POST['Id'];
$song_name=$_POST['songname'];
$artist_name=$_POST['artistname'];
$song_img=$_FILES['songposter']['name'];
$tmp_name=$_FILES['songposter']['tmp_name'];
$song = $_FILES['song']['name'];
$tmp_name1=$_FILES['song']['tmp_name'];
$song_video = $_POST['song_video'];

$q = "update songs set song_name='$song_name',artist_name='$artist_name',song_img='$song_img',song='$song',song_Info='$song_video' where id=$id";
$query = mysqli_query($conn, $q);


move_uploaded_file("$tmp_name","uploads/images/"."$song_img");
 move_uploaded_file("$tmp_name1","uploads/audio/"."$song");

header('location:Admin_show.php');
?>