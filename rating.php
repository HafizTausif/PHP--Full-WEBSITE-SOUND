<style>


.review {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 10px;
}

.review h3 {
  font-size: 18px;
  margin-top: 0;
}

.review p {
  font-size: 14px;
  line-height: 1.5;
}

.review .rating {
  font-weight: bold;
  color: #ff9900;
}

.review .reviewer {
  font-size: 12px;
  color: #666;
}

.rating {
  margin-bottom: 5px;
}

.rating p {
  font-size: 14px;
}

.avg-rating {
  font-size: 50px;
  font-weight: bold;
  color: #ff9900;
  margin-top: 10px;
}
</style>




<?php
include 'side.php';
include 'connection/conn.php';
$id=$_GET['id'];
$q1="select * from songs where id='$id'";
$query = mysqli_query($conn, $q1);
$row=mysqli_fetch_assoc($query);
$id = $row['id'];
?><center>
            <h1>********RATING**********</h1>
                    </center>
            <br>
            <br>
            <br>

<?php

$id=$_GET['id'];
$q1="SELECT `songs`.`id`,`songs`.`song_name`, `songs`.`artist_name`, `songs`.`song_img`, `songs`.`song`, `songs`.`song_Info`, `songs`.`Year`,`artist`.`Artist_name`, `artist`.`Artist_age`, `artist`.`Artist_info`, `artist`.`Artist_img` from `songs` join `artist` 
on `songs`.Artist_id = `artist`.`Artist_id` where id=$id ";


$query = mysqli_query($conn, $q1);
while ($row=mysqli_fetch_assoc($query)) {
  $id = $row['id'];
  
$song_name = $row['song_name'];
$img = $row['song_img'];
 $artist= $row['Artist_name'];
 $genre= $row['song_Info'];
 $year= $row['Year'];

  echo '

    <div class="col-md-4 my-2 ">
<div class="card" style="width: 50rem;">
  <img class="card-img-top" src="uploads/images/'.$img.'"  width="100px" height="400px" alt="Card image cap">
  
  <div class="card-body bg-dark text-white">
  <h3 class="card-title  ">'. $song_name .'</h3>
  By:

 
 
  
    <h5 class="card-text"><a class="text-white" href="artist_info.php?id='.$id.'">'.$artist.'</a></h5>
   GENRE:
   <h5 class="card-text">'.$genre.'</h5>
   YEAR:
   <h5 class="card-text">'.$year.'</h5>
    <a href="playsong.php?id='.$id.'" class="btn btn-danger" id="load"  >Play Song</a>
    <a href="rating.php?id='.$id.'" class="btn btn-success">Rate Song</a>
  </div>
</div>
    </div> 
';}


// Connect to the database
include 'connection/conn.php';
$id=$_GET['id'];
// Query the database for reviews
$sql = "SELECT `songs`.`id`,`reviews`.`review_title`, `reviews`.`review_text`, `reviews`.`review_rating`, `reviews`.`reviewer_name` from `songs` join `reviews` on `songs`.id = `reviews`.`song_id` WHERE song_id = '$id'";
$result = mysqli_query($conn, $sql);
$total_rating = 0;
$num_ratings = 0;
// Display the reviews
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="review">';
  echo '<h2>' . $row['review_title'] . '</h2>';
  echo '<h5>' . $row['review_text'] . '</h5>';
  echo '<h5 class="rating">' . $row['review_rating'] . '/5</h5>';
  echo '<p class="reviewer">by ' . $row['reviewer_name'] . ' on 22/3/2023</p>';
  echo '</div>'; 
   echo '<div class="rating">';
  echo '<p>' . $row['reviewer_name'] . ' rated this product ' . $row['review_rating'] . '/5</p>';
  echo '</div>'; 
   $total_rating += $row['review_rating'];
  $num_ratings++;
  
  
 
}

 if ($num_ratings > 0) {
  $avg_rating = round($total_rating / $num_ratings, 1);
  echo '<h1 class="avg-rating">Average rating: ' . $avg_rating . '/5</h1>';
}

// Display the ratings





// Calculate and display the average rating

echo '
<a href="rating_insert.php?id='.$id.'" class="btn btn-warning">ADD your Review</a>';
// Close the database connection
mysqli_close($conn);
?>