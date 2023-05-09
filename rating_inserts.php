



<?php
 include 'connection/conn.php';
$review_title=$_POST['review_title'];
$review=$_POST['review'];
$rating=$_POST['rating'];
$name=$_POST['name'];
$id=$_POST['id'];
$sql = "INSERT INTO `reviews`(`id`,`song_id`, `review_title`, `review_text`, `review_rating`, `reviewer_name`) VALUES (null,'$id','$review_title','$review','$rating','$name')";

$query = mysqli_query($conn,$sql);
if(!$query){
    
echo '
    <div class="alert alert-danger" role="alert">
    YOUR Review IS not ADDED </div>';
}
else{

   
    echo'
    <div class="alert alert-success" role="alert">
    YOUR Review IS ADDED </div>';
    
}

header('location:index.php');

?>