<?php
error_reporting(0);
include 'connection/conn.php';

$id = $_GET['Artist_id'];

$aname=$_POST['aname'];
$aage=$_POST['aage'];
$ainfo = $_POST['ainfo'];
$aimg=$_FILES['aimg']['name'];
$tmp_name=$_FILES['aimg']['tmp_name'];


$q = "select * from artist where Artist_id=$id";
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


<form action="Update_a.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ID</label>
<div class="col-sm-10">
<input type="text" value="<?= $row['Artist_id'] ?>" name="Id" readonly class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist_name</label>
<div class="col-sm-10">
<input type="text" value="<?= $row['Artist_name'] ?>" name="aname" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist_age</label>
<div class="col-sm-10">
<input type="text" value="<?= $row['Artist_age'] ?>" name="aage" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist_info</label>
<div class="col-sm-10">
<input type="file"  name="ainfo" value="<?=$row['Artist_info']?>"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist_img</label>
<div class="col-sm-10">
    <img src="uploads/images/<?php echo $row['Artist_img'];?>" width="80px" height="80px" alt="" srcset="">

<input type="file" value="<?= $row['Artist_img'] ?>"  name="aimg"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
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