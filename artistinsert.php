<?php  
 include 'side.php';
?>

<div class="container">

    <div class="jumbotron text-center">
        <h2>Admin Artist Insert</h2>
    </div>
    <br>
<div class="row">
<div class="col-md-12">


<form action="artist_insert.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist NAME</label>
<div class="col-sm-10">
<input type="text" name="aname" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ARTIST Age</label>
<div class="col-sm-10">
<input type="text" name="aage" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist Info</label>
<div class="col-sm-10">
<input type="text"  name="ainfo"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist Img</label>
<div class="col-sm-10">
<input type="file"  name="aimg"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>


<button type="submit" class=" mt-md-3 btn btn-lg btn-dark">Add new Artist</button>


</form>


</div>
</div>

</div>
<a  href="artist_show.php" class="btn btn-info text-light">Show Data</a>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>