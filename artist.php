<style>

.cards {
	display: flex;
	flex-wrap: wrap;
	flex-direction: row;
	justify-content: center;
}
.card {
	width: 300px;
	height: 250px;
	margin: 15px;
	position: relative;
	min-width: 190px;
	background: #000;
}
.card:hover .overlayer {
	visibility: visible;
}
.card img {
	width: 100%;
	height: 70%;
}
.card .title  {
	width: 100%;
	height: 30px;
	text-align: center;
	margin-top: 180px;
}

.card .title a {
	top: -175px;
	color: #fff;
	position: relative;
	font-size: 13px;
	text-decoration: none;
}

.card .overlayer {
	top: 0;
	right: 0;
	width: 100%;
	height: 100%;
	position: absolute;
	background: rgba(0,0,0,0.6);
	text-align: center;
	visibility: hidden;
}

.overlayer .fa-play-circle {
	color: #fff;
	font-size: 73px;
	margin-top: 53px;
	transition: 100ms ease-in-out;
}
.fa-play-circle:hover {
	transform: scale(1.1);
}



/*  FOLLOW*/
.Follow {	  background:url("https://pbs.twimg.com/profile_images/959092900708544512/v4Db9QRv_bigger.jpg")no-repeat center / contain;
	width: 50px;
	height: 50px;
	bottom: 9px;
	right: 20px;
	display:block;
	position:fixed;
	border-radius:50%;
	z-index:999;
	animation:  rotation 10s infinite linear;
	}

@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}





</style>
<Center>
<h1>*--------------ARTIST'S----------------* </h1>
<br>
<br>

</Center>
<div class="container" id="artist">
    <div class="row ">
<?php

include 'connection/conn.php';


$q2="SELECT * from artist";


$query1 = mysqli_query($conn, $q2);
while ($row=mysqli_fetch_assoc($query1)){
  $artist= $row['Artist_name'];
  $artist_img= $row['Artist_img'];

echo '
<div class="card">
			<div class="overlayer">
				
			</div>
			<img src="uploads/images/'.$artist_img.'" alt="">
			<div class="title">
				<a href="
        "><h4>'.$artist.'</h4></a>
			</div>
		</div>	';

  
  ;}?>
  </div>
</div>