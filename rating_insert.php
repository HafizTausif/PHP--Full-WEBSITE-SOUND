


<?php
session_start();
include 'side.php';
include 'connection/conn.php';

$id=$_GET['id'];

$q = "select * from songs where id='$id'";
$query = mysqli_query($conn, $q);
$row = (mysqli_fetch_assoc($query));


?>





<div class="container">

    <div class="jumbotron text-center">
        <h2>SONG RATING</h2>
    </div>
    <br>
<div class="row">
<div class="col-md-12">


<form action="rating_inserts.php" method="post" >
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">   </label>
<div class="col-sm-10">
<input type="hidden" name="id" value="<?= $row['id'] ?>" readonly class="form-control form-control-sm" id="colFormLabel" placeholder="">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Review Title</label>
<div class="col-sm-10">
<input type="text" name="review_title" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Your Review</label>
<div class="col-xl-10">
<input type="text"  name="review"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Rating</label>
<div class="col-sm-10">
<input type="number"  name="rating" min="1" max="5"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<?php
if(isset($_SESSION['loggedin']) && $loggedin == true ){

echo '

    <div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">YOUR NAME</label>
<div class="col-sm-10">
<input type="text" readonly   name="name" value="'.$_SESSION['name'].'"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>';}?>



<button type="submit">submit</button>
