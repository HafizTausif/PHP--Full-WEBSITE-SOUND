







<?php
   include 'side.php';

   ?>
   <body style="background:linear-gradient(grey,black,grey);">
   <?php


include 'connection/conn.php';
$id=$_GET['id'];
$q1="SELECT `songs`.`song_name`, `songs`.`artist_name`, `songs`.`song_img`, `songs`.`song`, `songs`.`song_Info`,`artist`.`Artist_name`, `artist`.`Artist_age`, `artist`.`Artist_info`, `artist`.`Artist_img` from `songs` join `artist` 
on `songs`.Artist_id = `artist`.`Artist_id` where id=$id";

$query = mysqli_query($conn, $q1);
// $row = mysqli_fetch_assoc($query);

while ($row = mysqli_fetch_assoc($query)) { 
     
     $artist_name = $row['Artist_name'];
  
    $artist_age = $row['Artist_age'];
    $artist_info = $row['Artist_info'];
   $artist_img= $row['Artist_img'];
   echo '
    

<section  style="width:100%;">
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-11 col-xl-12">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 200px;">
              <img src="uploads/images/'.$artist_img.'"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-6 mb-4"
                style="width: 150px; z-index: 1">
             
            </div>
            <div class="ms-5" style="margin-top: 100px;">
              <h2>'.$artist_name.'</h2>
              <p></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content text-center py-1">
            <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
            style="z-index: 1;">
            Edit profile
          </button>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">'.$artist_info.'</p>
                <p class="font-italic mb-1">Age :'.$artist_age.'</p>
                
              </div>
            </div>
            ';}?>


            
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="container">
                 <h2>His Songs</h2>
         
                    <table class="table table-hover" >
          <thead>
            <tr>
              
             
              <th scope="col">Song Name</th>
              <th scope="col">Poster</th>
              <th scope="col">Song</th>
              
            </tr>
          </thead><tbody>
         
         
         
         <?php
         
         
         
         
         include 'connection/conn.php';
         $id = $_GET['id'];
         $q1="SELECT `songs`.`song_name`, `songs`.`song_img`,`songs`.`song`,`artist`.`Artist_name` 
         from `songs` join `artist` on `songs`.Artist_id = `artist`.`Artist_id` where id=$id";
         
         $query1 = mysqli_query($conn, $q1);
         // $row = mysqli_fetch_assoc($query);
         
         while ($row = mysqli_fetch_assoc($query1)) {
         
         
         
            $artist_name = $row['Artist_name'];
            $song_name = $row['song_name'];
            $song_img = $row['song_img'];
            $song = $row['song'];
         
         echo '
         <td> '.$song_name.' </td>
             
             <td><img src="uploads/images/'.$song_img.'" width="80px" height="80px" alt="" srcset=""> </td>
             <td><audio controls >
         <source src="uploads/audio/'.$song.'" type="audio/ogg">
              
         </audio></td>
         </tr>
         <?php
         ';
         }
         
         
         
         ?>
         
         </tbody>
         </table>
         

            








           </div>
       


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>