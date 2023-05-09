<?php

include 'side.php';


 
 include 'connection/conn.php';


 $aname=$_POST['aname'];
 $aage=$_POST['aage'];
 $ainfo = $_POST['ainfo'];
 $aimg=$_FILES['aimg']['name'];
 $tmp_name=$_FILES['aimg']['tmp_name'];






$sql="INSERT INTO `artist` (`Artist_id`, `Artist_name`, `Artist_age`, `Artist_info`, `Artist_img`)
 VALUES (null,'$aname','$aage','$ainfo','$aimg')";
 $query=mysqli_query($conn,$sql);

 //upload images
 move_uploaded_file("$tmp_name","uploads/images/"."$aimg");
 
 
 header('location:artist_show.php');
 
 ?>