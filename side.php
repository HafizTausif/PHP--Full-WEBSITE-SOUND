



<?php
$loggedin = false;
$admin = false;
error_reporting(0);
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['name'] && $_SESSION['pass'] && $_SESSION['loggedin'] = true) {
    $loggedin = true;
}
// if(isset($_SESSION['loggedin1']) && $_SESSION['admin'] && $_SESSION['adpass'] && $_SESSION['loggedin'] =true){
//     $admin=true;
// }
// else{
//     $loggedin=false;
// }

if (isset($_SESSION['loggedin']) && $_SESSION['adname'] && $_SESSION['adpass'] && $_SESSION['loggedin'] = true) {
    $admin = true;
}
// if(isset($_SESSION['loggedin1']) && $_SESSION['admin'] && $_SESSION['adpass'] && $_SESSION['loggedin'] =true){
//     $admin=true;
// }
else {  
    $admin = false;
}


?>



<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="jquery-3.6.3.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
<title>Hello, world!</title>
</head>
<body >
<!-- navbar start -->

<style>

body{

  background-color:#1b1b1b;
  color:#ffa31a;
}
*{
  box-sizing: border-box;
}

.search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}


</style>




<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style=" background-color:#292929;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 position-fixed">
                <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto  text-decoration-none" style=" color:#ffa31a;">
                <i class="fa fa-music text-light"></i>  <span class="fs-5 ms-2 d-none d-sm-inline ">SOUND</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" >
                    <li class="nav-item">
                        <a href="index.php" id="home" class="nav-link align-middle px-0" style=" color:#ffa31a;">
                            <i class="fa fa-home text-light"></i> <span class="ms-1 d-none d-sm-inline " >Home</span>
                        </a>
                    </li>
                   <?php
                   if($admin == true)
                   {
                     echo' <li>
                        <a href="#dashboard" id="dash" data-bs-toggle="collapse" class="nav-link px-0 align-middle" style=" color:#ffa31a;">
                            <i class="fa fa-book text-light"></i> <span class="ms-1 d-none d-sm-inline ">Dashboard</span> </a>';
                            echo'  <li>
                        <a href="logout.php" class="nav-link px-0 align-middle" style=" color:#ffa31a;">
                            <i class="fa fa-arrow-left text-light"></i> <span class="ms-1 d-none d-sm-inline">Logout</span></a>
                    </li>';
                   }
                   
                   if($loggedin == true)
                   {
                    
                            echo'  <li>
                        <a href="logout.php" class="nav-link px-0 align-middle" style=" color:#ffa31a;">
                            <i class="fa fa-arrow-left text-light"></i> <span class="ms-1 d-none d-sm-inline ">Logout</span></a>
                    </li>';
                   }
                   
                   
                   ?>
                   
                   
                  
                       
                    <li>
                        <a href="#" class="nav-link px-0 align-middle" style=" color:#ffa31a;">
                            <i class="fa fa-volume-up text-light"></i> <span class="ms-1 d-none d-sm-inline">Songs</span></a>
                    </li>
                   
                      
                    <?php
                    if ($loggedin == false && $admin == false) {
                    
                   echo' <a type="button" data-toggle="modal" data-target="#Modal" class="nav-link px-0 align-middle"style=" color:#ffa31a;">
                    <i class="fa fa-arrow-right text-light"></i> <span class="ms-1 d-none d-sm-inline">Login</span></a>

                    <a type="button" data-toggle="modal" data-target="#exampleModal" class="nav-link px-0 align-middle"style=" color:#ffa31a;">
                    <i class="fa fa-volume-up text-light"></i> <span class="ms-1 d-none d-sm-inline">Sign In</span></a>';
                }
                   ?>
                    <li>
                        <a href="#artist" id="artist"  class="nav-link px-0 align-middle "style=" color:#ffa31a;">
                            <i class="fa fa-star text-light"></i> <span class="ms-1 d-none d-sm-inline ">Artist</span></a>
                            <a href="#videot" id="video"  class="nav-link px-0 align-middle "style=" color:#ffa31a;">
                            <i class="fa fa-star text-light"></i> <span class="ms-1 d-none d-sm-inline ">Videos</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                    
                            <li>
                                
                            </li>
                        </ul>
                    </li>
                   
                    
                </ul>
                <hr>
                <?php
                if(isset($_SESSION['loggedin']) && $loggedin == true ){
                  
                    echo '<div class="pb-4"style=" color:#ffa31a;">
                   WELCOME!! <br><br>   <a href="#" class="d-flex align-items-center text-white text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                      <span class="d-none d-sm-inline mx-1"style=" color:#ffa31a;">'.$_SESSION['name'].'</span>
                    </a>
                   
                </div>';
                  }
                ?>
            </div>
        </div>
        <div class="col py-3">
     
       