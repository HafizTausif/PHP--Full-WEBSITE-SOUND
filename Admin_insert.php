 
 <?php
  
 include 'connection/conn.php';


 $song_name=$_POST['songname'];
 
 $song_img=$_FILES['songposter']['name'];
 $tmp_name=$_FILES['songposter']['tmp_name'];
$song = $_FILES['song']['name'];
$tmp_name1=$_FILES['song']['tmp_name'];
$song_video = $_POST['song_video'];
$year = $_POST['year'];
$artistid = $_POST['Category'];



 $sql = "INSERT INTO `songs` (`id`, `song_name`, `artist_name`, `Song_img`, `song`, `song_info`,`Year`,`Artist_id`) VALUES (NULL, '$song_name', ' $artistid', '$song_img', '$song', '$song_video','$year','$artistid')";
 $query = mysqli_query($conn,$sql);

 //upload images
 move_uploaded_file("$tmp_name","uploads/images/"."$song_img");
 move_uploaded_file("$tmp_name1","uploads/audio/"."$song");
 
 header('location:Admin_show.php')

 ?>