<?php
        include 'connection/conn.php';
        $name=$_POST["email"];
        $pass=$_POST["pass"];
        
        if($name =='admin' && $pass == 'admin'){
            $ha = "select * from user where Username ='$name' AND Password ='$pass'";
            $az =mysqli_query($conn,$ha);
            $nu =mysqli_num_rows($az);
            if($nu == 1){
                $admin =true;
            session_start();
            $_SESSION['loggedin'] =true;
            $_SESSION['adname'] =$name;
            $_SESSION['adpass'] =$pass;
            
            header("location:index.php");
        }
    }
    
     else{
            $ham = "select * from user where Username ='$name' AND Password ='$pass'";
            
    
    $azh =mysqli_query($conn,$ham);
    $num =mysqli_num_rows($azh); } 
    if($num == 1){
    session_start();
    
    $loggedin =true;
    $_SESSION['loggedin'] =true;
    $_SESSION['name'] =$name;
    $_SESSION['pass'] =$pass;
    
    header("location:index.php");

        }
     else{
        header("location:index.php");
    echo '  <div class="alert alert-primary" role="alert">
  Not Logged in
</div>';
    
    
    }   
        

        
?>