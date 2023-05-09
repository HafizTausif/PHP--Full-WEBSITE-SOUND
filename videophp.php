
<?php
include 'connection/conn.php';
if(isset($_POST['submit'])) {
  $video_url = $_POST['video_url'];
  $video_id = '';
  
  // Extract the video ID from the URL
  $url_parts = parse_url($video_url);
  if(isset($url_parts['query'])) {
     parse_str($url_parts['query'], $query_params);
     if(isset($query_params['v'])) {
        $video_id = $query_params['v'];
     }
  }
}




// Insert the video's information into the database
$sql = "INSERT INTO videos (id,youtube_id) VALUES (null,'$video_id')";
mysqli_query($conn, $sql);
header('location:videoshow.php');
?>