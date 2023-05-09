<?php  
 include 'side.php';
?>


<div class="container">

    <div class="jumbotron text-center">
        <h2>Admin Song Insert</h2>
    </div>
    <br>
<div class="row">
<div class="col-md-12">


<form action="Admin_insert.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG NAME</label>
<div class="col-sm-10">
<input type="text" name="songname" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG POSTER</label>
<div class="col-sm-10">
<input type="file"  name="songposter"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG</label>
<div class="col-sm-10">
<input type="file"  name="song"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">SONG_Genre</label>
<div class="col-sm-10">
<input type="text"   name="song_video"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Year</label>
<div class="col-sm-10">
<input type="text"   name="year"   class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Artist Name</label>
<select name="Category">
            <?php
             include 'connection/conn.php';
             $sql = "SELECT * FROM `artist`";
             $re  = mysqli_query($conn,$sql);
             // use a while loop to fetch data
             // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                    $re)){
                       
                        ?>
                      
                <option value="<?php echo $category["Artist_id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["Artist_name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                        }
                // While loop must be terminated
            ?>
        </select>
        </div>
</div>
<button type="submit" class=" mt-md-3 btn btn-lg btn-dark">Add new song</button>


</form>

<a  href="Admin_show.php" class="btn btn-info text-light">Show Data</a>
</div>
</div>

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>