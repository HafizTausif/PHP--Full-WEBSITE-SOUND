<?php
error_reporting(0);
include 'connection/conn.php';


$song_name=$_POST['songname'];
$artist_name=$_POST['artistname'];
$song_img=$_FILES['songposter']['name'];
$tmp_name=$_FILES['songposter']['tmp_name'];
$song = $_FILES['song']['name'];
$tmp_name1=$_FILES['song']['tmp_name'];
$song_video = $_POST['song_video'];
$id = $_GET['id'];
$q = "select * from songs where Id=$id";
$query = mysqli_query($conn, $q);
$row = (mysqli_fetch_assoc($query));





?>
<?php  
 include 'side.php';
?>

<div class="jumbotron text-center">
        <h2>Admin Song Update</h2>
    </div>
<div class="col-md-12">


<form action="Update.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ID</label>
<div class="col-sm-10">
<input type="text" value="<?= $row['id'] ?>" name="Id" readonly class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG NAME</label>
<div class="col-sm-10">
<input type="text" value="<?= $row['song_name'] ?>" name="songname" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG POSTER</label>
<div class="col-sm-10">
    <img src="uploads/images/<?php echo $row['song_img'];?>" width="80px" height="80px" alt="" srcset="">

<input type="file" value=" $row['song_img'] "  name="songposter"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG</label>
<div class="col-sm-10">
<input type="file"  name="song" value="<?=$row['song']?>"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG_Genre</label>
<div class="col-sm-10">
<input type="text"   name="song_video" value="<?= $row['song_Info'] ?>"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<button type="submit" class=" mt-md-3 btn btn-lg btn-dark">Update</button>


</form>

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>