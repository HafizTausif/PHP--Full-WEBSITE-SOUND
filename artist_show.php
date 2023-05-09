<?php  
 include 'side.php';
?>

<div class="jumbotron text-center text-white bg-dark">
        <h2>Admin Artist DATA</h2>
    </div>
<div class="col-md-12">
<a class="btn btn-dark text-white" href="artistinsert.php">Add Artist</a>
<a class="btn btn-success text-white ml-4" href="index.php">MAin page</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Artist_name</th>
      <th scope="col">Artist_age</th>
      <th scope="col">Artist_info</th>
      <th scope="col">Artist_img</th>
      
    </tr>
  </thead><tbody>
  <?php

include 'connection/conn.php';

$q = "select * from artist";
$query=mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($query)){
?> 
 <tr>
      <th scope="row"><?= $row['Artist_id'] ?></th>
      <td><?= $row['Artist_name'] ?></td>
      <td><?= $row['Artist_age'] ?></td>
     
  <td><?= $row['Artist_info'] ?></td>
  <td><img src="uploads/images/<?php echo $row['Artist_img'];?>" width="80px" height="80px" alt="" srcset=""> </td>
<td><a href="edit_a.php?Artist_id=<?php echo $row['Artist_id'] ?>" class="btn btn-primary">Update</a></td>

<td><a href="Delete_a.php?Artist_id=<?php echo $row['Artist_id'] ?>" class="btn btn-danger">Delete</a></td>

  
  
  

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
