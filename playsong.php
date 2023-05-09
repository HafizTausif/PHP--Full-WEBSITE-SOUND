<?php  
 include 'side.php';
?>

<body class=background>
<style>
    .background{
      background: linear-gradient(black,#0f0f,black);
    }
</style>
<?php

include 'connection/conn.php';
$id = $_GET['id'];
$q = "SELECT `songs`.`id`,`songs`.`song_name`, `songs`.`artist_name`, `songs`.`song_img`, `songs`.`song`, `songs`.`song_Info`, `songs`.`Year`,`artist`.`Artist_name`, `artist`.`Artist_age`, `artist`.`Artist_info`, `artist`.`Artist_img` from `songs` join `artist` 
on `songs`.Artist_id = `artist`.`Artist_id`  where Id=$id";
$query = mysqli_query($conn, $q);
while ($row = mysqli_fetch_assoc($query)) {
    
  
$song_name = $row['song_name'];
$img = $row['song_img'];
 $artist= $row['Artist_name'];
 $genre= $row['song_Info'];
 $song = $row['song'];
    echo '<center>
<div class="card" style="max-width: 800px;background: linear-gradient(black,#0f0f,black);>
<div class="card-body">
<h2 class="card-title text-white ">' . $song_name . '</h2>
<h5 class="card-subtitle text-white">BY :' . $artist . '</h5>
<img class="card-img" src="uploads/images/'.$img.'" width:100px >
<div class="card-content"><audio controls style="width:800px ">
<source src="uploads/audio/'.$song.'" type="audio/ogg">
     
</audio>
</div>
</div></center>';
}?>

<a  href="index.php" class="btn btn-info text-light"> Exit Player</a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
