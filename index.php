 
 
 
 
 <?php
   include 'side.php';
   include 'signup.php';
   include 'loginhandle.php';
   ?>
<!-- navbar end -->
<div class="col-md-12" id="searchresults">
<Center>
<h1>*--SOUND--* </h1>

</Center>
<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://source.unsplash.com/1600x600/?Songs" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1600x600/?music" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1600x600/?pop" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<Center>
<h1>SOUND - <b>SONGS<b> </h1>

<div class="container" >
<!-- <form  class="input-group">
<a href ="index.php"  class="btn btn-info">    <i class="bi-arrow-90deg-left"></i>
 </a>

  <div class="form-outline">  
    <input type="text"   id="form1" class="form-control" /> -->
  
 </div>
 <div class="search-box">
    <button class="btn-search bg-warning"><i class="fa fa-search"></i></button>
    <input type="text" id="form1" class="input-search" placeholder="Type to Search...">
  </div>

</form> </Center><br>
<label >FILTER by GENRE:</label>

<select name="filter" id="filter">
<?php
             include 'connection/conn.php';
             $sql = "SELECT DISTINCT song_Info FROM `songs`";
             $re  = mysqli_query($conn,$sql);
             // use a while loop to fetch data
             // from the $all_categories variable
                // and individually display as an option
                ?>
                <option value="" >None</option><?php
                while ($category = mysqli_fetch_assoc(
                    $re)){
                       
                        ?>
                      
                <option value="<?php echo $category["song_Info"];
                    // The value we usually set is the primary key
                ?>">
                <?php echo $category["song_Info"];
                        // To show the category name to the user
                       
                    ?>
                </option>
                    
            <?php
                        }
                // While loop must be terminated
            ?>
</select>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label >FILTER by YEAR:</label>
<select name="filter" id="filter1">
<?php
 
      
  // Display all alphabetic elements
  // one after another
 

             include 'connection/conn.php';
             $sql = "SELECT DISTINCT Year FROM `songs`";
             $re  = mysqli_query($conn,$sql);
             // use a while loop to fetch data
             // from the $all_categories variable
                // and individually display as an option?>
                <option value= "";
   >None</option><?php
                while ($category = mysqli_fetch_assoc(
                    $re)){
                       
                        ?>
                      
                <option value="<?php echo $category["Year"];
                    // The value we usually set is the primary key
                ?>">
                <?php echo $category["Year"];
                        // To show the category name to the user
                       
                    ?>
                </option>
                    </div>
            <?php
                        }
                // While loop must be terminated
            ?>
</select>


<div class="row mt-5 " id="search">
  
<?php


include 'connection/conn.php';


$q1="SELECT `songs`.`id`,`songs`.`song_name`, `songs`.`artist_name`, `songs`.`song_img`, `songs`.`song`, `songs`.`song_Info`, `songs`.`Year`,`artist`.`Artist_name`, `artist`.`Artist_age`, `artist`.`Artist_info`, `artist`.`Artist_img` from `songs` join `artist` 
on `songs`.Artist_id = `artist`.`Artist_id` ";


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
    <a href="playsong.php?id='.$id.'" class="btn btn-danger" id="load"  >Play Song</a>
     
    '; 
    if(isset($_SESSION['loggedin']) && $loggedin == true ){
      echo '
    <a href="rating.php?id='.$id.'" class="btn btn-success">Rate Song</a>
  </div>
  </div>
  </div>
';}
    else{

      echo'</div>
    </div></div>';
    }
}?>



</div>

</div>
<br>
<div class="jumbotron  text-center text-white bg-dark">
        <h5>@CopyRight Served</h5>
    </div>
<!-- carousel end -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
  //search ke leii


$(document).ready(function(){


  $("#form1").keyup(function(){

var input = $(this).val();
// alert(input);


$.ajax({


url:"searchresult.php",
method:"POST",
data:{input:input},

success:function(data){

  $("#search").html(data);
  $("#search").css("display","block");
}

});

  });
});


//dashboard ke liee

$(document).ready(function() {
  $('#dash').click(function() {
    $.ajax({
      url: 'dashboard.php',
      success: function(data) {
        $('#searchresults').html(data);
      },
      error: function() {
        alert('There was an error loading the content.');
      }
    });
  });
});
// playsong

$(document).ready(function() {
  $('#load').click(function() {
    $.ajax({
      url: "playsong.php?id='.$id.'",
      success: function(data) {
        $('#searchresults').html(data);
      },
      error: function() {
        alert('There was an error loading the content.');
      }
    });
  });
});



//artist page ke liee

$(document).ready(function() {
  $('#artist').click(function() {
    $.ajax({
      url: 'artist.php',
      success: function(data) {
        $('#search').html(data);
      },
      error: function() {
        alert('There was an error loading the content.');
      }
    });
  });
});


//videos ke leii



$(document).ready(function() {
  $('#video').click(function() {
    $.ajax({
      url: 'video1.php',
      success: function(data) {
        $('#search').html(data);
      },
      error: function() {
        alert('There was an error loading the content.');
      }
    });
  });
});

//Filter og GEnre
$(document).ready(function(){


$("#filter").on('change',function(){

var value = $(this).val();
//alert(value);


$.ajax({


url:"filter.php",
method:"POST",
data:'request=' + value,


success:function(data){

$("#search").html(data);

}

});

 });
 });




 //Filter of Artist
$(document).ready(function(){


$("#filter1").on('change',function(){

var value1 = $(this).val();
//alert(value);


$.ajax({


url:"filter1.php",
method:"POST",
data:'request=' + value1,


success:function(data){

$("#search").html(data);

}

});

 });
 });




 
</script>
</script>

</body>
</html>
