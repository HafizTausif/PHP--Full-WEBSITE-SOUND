


   
   
   

<?php
include 'connection/conn.php';
if(isset($_POST['input'])){


    $search =  $_POST['input'];
    
    $sql = "SELECT `songs`.`id`,`songs`.`song_name`,`songs`.`artist_name`, `songs`.`song_img`, `songs`.`song`, `songs`.`song_Info`, `songs`.`Year`,`artist`.`Artist_name`, `artist`.`Artist_age`, `artist`.`Artist_info`, `artist`.`Artist_img` from `songs` join `artist` 
    on `songs`.Artist_id = `artist`.`Artist_id` WHERE song_name like '%$search%' OR song like '%$search%' OR song_Info like '%$search%' OR `artist`.`Artist_name` like '%$search%' ";

    $result = mysqli_query($conn, $sql);
    $queryresult = mysqli_num_rows($result);
    if($search != ""){
    echo "You Searched '$search'<br>";
    echo "THERE ARE $queryresult FOUND :)";
   
    
   

    if($queryresult > 0){
?><div class="row mt-5"><?php
     

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $song_name = $row['song_name'];
            $img = $row['song_img'];
            $artist = $row['Artist_name'];
            $genre = $row['song_Info'];
            $year= $row['Year'];

            echo '
          
              <div class="col-md-4 my-2 ">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="uploads/images/' . $img . '"  width="50px" height="200px" alt="Card image cap">
            
            <div class="card-body bg-dark text-white">
            <h5 class="card-title  ">' . $song_name . '</h5>
            By:
          
           
           
            
              <p class="card-text"><a class="text-white" href="artist_info.php?id=' . $id . '">' . $artist . '</a></p>
             GENRE:
             <p class="card-text">' . $genre . '</p>
             YEAR:
              <p class="card-text">'.$year.'</p>
              <a href="playsong.php?id=' . $id . '" class="btn btn-danger">Play Song</a>
              <a href="playlist.php?name=" class="btn btn-success">Add To Playlist</a>
            </div>
          </div>
              </div>
              
          ';
        }
       
    }
    else{
        echo '<br>
        <br>
        No REsults ARE FOunds';
    }
 }
 else{
     
$q1="SELECT `songs`.`id`,`songs`.`song_name`,  `songs`.`song_img`, `songs`.`song`, `songs`.`song_Info`, `songs`.`Year`,`artist`.`Artist_name`, `artist`.`Artist_age`, `artist`.`Artist_info`, `artist`.`Artist_img` from `songs` join `artist` 
on `songs`.Artist_id = `artist`.`Artist_id` ";


$query = mysqli_query($conn, $q1);
?><div class="row mt-5 " id="search"><?php
while ($row=mysqli_fetch_assoc($query)) {
  $id = $row['id'];
$song_name = $row['song_name'];
$img = $row['song_img'];
 $artist= $row['Artist_name'];
 $genre= $row['song_Info'];
 $year= $row['Year'];
  
  echo '

    <div class="col-md-4 my-2 ">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="uploads/images/'.$img.'"  width="50px" height="200px" alt="Card image cap">
  
  <div class="card-body bg-dark text-white">
  <h5 class="card-title  ">'. $song_name .'</h5>
  By:

 
 
  
    <p class="card-text"><a class="text-white" href="artist_info.php?id='.$id.'">'.$artist.'</a></p>
   GENRE:
   <p class="card-text">'.$genre.'</p>
   YEAR:
   <p class="card-text">'.$year.'</p>
    <a href="playsong.php?id='.$id.'" class="btn btn-danger" id="load" onclick="foo()" >Play Song</a>
    <a href="review.php?id='.$id.'" class="btn btn-success">Rate Song</a>
  </div>
</div>
    </div>
';}?>
  </div><?php
      $result = mysqli_query($conn, $sql);
        
    }

  }
?>

