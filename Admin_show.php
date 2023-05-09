<?php  
 include 'side.php';
?>

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>
<div class="jumbotron text-center text-white bg-dark">
        <h2>Admin Song DATA</h2>
    </div>
<div class="col-md-12">
<a class="btn btn-dark text-white" href="Admin.php">Add Data</a>
<a class="btn btn-success text-white ml-4" href="index.php">MAin page</a>
<a class="btn btn-dark text-white" href="artistinsert.php">Add Artist</a>
<a class="btn btn-dark text-white" href="video.php">Add Video</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Song_name</th>
      
      <th scope="col">SOng poster</th>
      <th scope="col">SOng</th>
      
      <th scope="col">Genre</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead><tbody>
  <?php

include 'connection/conn.php';

$q = "select * from songs";
$query=mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($query)){
?> 
 <tr>
      <th scope="row"><?= $row['id'] ?></th>
      <td><?= $row['song_name'] ?></td>
    
      <td><img src="uploads/images/<?php echo $row['song_img'];?>" width="80px" height="80px" alt="" srcset=""> </td>
      <td><audio controls >
  <source src="uploads/audio/<?=$row['song']; ?>" type="audio/ogg">
       
 </audio></td>
 
  <td><?= $row['song_Info'] ?></td>

<td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</a></td>

<td><a href="Delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>

  
  
  

    </tr>
    
    <?php
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
