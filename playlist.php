<?php
        if(isset($_SESSION['$id'] ) && $_SESSION['song'] &&  ($_SESSION['song_name'] && $_SESSION['img'] && $_SESSION['artist'] && $_SESSION['genre'])){

        }

        
        $song_name =$_SESSION['song_name'] ;
$img= $_SESSION['img'];
$artist= $_SESSION['artist'];
$genre= $_SESSION['genre'];
$song = $_SESSION['song'];

        include 'connection/conn.php';

        $sql ="INSERT INTO `playlist`(`song_name`, `song`, `song_img`, `Genre`) VALUES ('$song_name','$img','$artist','',[value-5])";


?>