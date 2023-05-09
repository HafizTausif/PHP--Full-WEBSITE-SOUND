<style>
.card{
      background-color: #3B3131;
      padding:20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 8px 5px 5px #3B3131;
  }

  .card1{
      background-color: black;
      padding:20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 8px 5px 5px #3B3131;
  }

    </style>
    <center>
    <h1>********ADMIN PANEL**********</h1>
</center>
<div id="main-content" class="container allContent-section py-4">
        <div class="row">
        <br>
            <br>
            <br>
            <center>
        <h3>********GENERAL INFO**********</h3>
</center>
        <br>
            <br>
            <br>
            <div class="col-sm-4">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Users</h4>
                    <h5 style="color:white;">
                    <?php
                    include 'connection/conn.php';
                        $sql="SELECT * from user ";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Songs</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from songs";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Artist</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from artist";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <br>
            <br>
            <br>
            <center>
            <h3>********CONTROLING TOOLS**********</h3>
                    </center>
            <br>
            <br>
            <br>
        
            

            <div class="col-sm-3">
            <div class="card1">
                    <i class="fa fa-music mb-2" style="font-size: 70px; color:white;"></i>
                    <a href="Admin.php" id="new_song">    <h4 style="color:white;">ADD NEW SONG    </h4></a>
                    </div>
            </div>

            <div class="col-sm-3">
            <div class="card1"  >
                    <i class="fa fa-music mb-2" style="font-size: 70px; color:white;"></i>
                    <a href="Admin_show.php" id="view_song">   <h4 style="color:white;">VIEW/REMOVE SONGS</h4></a>
                    </div>
            </div>
       

        <div class="col-sm-3">
            <div class="card1">
                    <i class="fa fa-users mb-2" style="font-size: 70px; color:white;"></i>
                    <a href="artist_show.php" id="view_artist">  <h4 style="color:white;">VIEW/REMOVE ARTIST</h4></a>
                    </div>
            </div>
        
            <div class="col-sm-3">
            <div class="card1">
                    <i class="fa fa-users mb-2" style="font-size: 70px; color:white;"></i>
                   <a href="artistinsert.php" id="new_artist"> <h4 style="color:white;">ADD NEW ARTIST</h4></a>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card1">
                    <i class="fa fa-play mb-2" style="font-size: 70px; color:white;"></i>
                   <a href="video.php" id="new_artist"> <h4 style="color:white;">ADD NEW VIDEO</h4></a>
                    </div>
            </div>
            
            <div class="col-sm-3">
            <div class="card1">
                    <i class="fa fa-pause mb-2" style="font-size: 70px; color:white;"></i>
                   <a href="videoshow.php" id="new_artist"> <h4 style="color:white;">VIEW/REMOVE VIDEOS</h4></a>
                    </div>
            </div>

    </div>
    </div>

  