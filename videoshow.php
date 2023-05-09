

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
        <h2>Admin Video DATA</h2>
    </div>
<div class="col-md-12">
<a class="btn btn-dark text-white" href="video.php">Add Videos Data</a>
<a class="btn btn-success text-white ml-4" href="index.php">MAin page</a>
<a class="btn btn-dark text-white" href="artistinsert.php">Add Artist</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">VIDEOS</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
     
    </tr>
  </thead><tbody>
  <?php

include 'connection/conn.php';

$q = "select * from videos  ";
$query=mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($query)){
?> 
 <tr>
      <th scope="row"><?= $row['id'] ?></th>
    <td><iframe width="300" height="250" src="https://www.youtube.com/embed/<?=$row['youtube_id']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'</td>
    
      

      <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</a></td>

<td><a href="Delete_v.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
  
  

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