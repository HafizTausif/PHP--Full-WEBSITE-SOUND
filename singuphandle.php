<?php
 include 'connection/conn.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $exist ="select * from user where Username='$name'";
    $sql2 = mysqli_query($conn,$exist);
    $row=mysqli_fetch_assoc($sql2);
    $num2=mysqli_num_rows($sql2);
    if($num2 > 0){
       echo"User Name Already Exists";
    }
    else{
       
   

    if($pass == $cpass){

       $sql="INSERT INTO `user` (`id`, `Username`, `Email`, `Password`, `Cpassword`) VALUES (NULL, '$name', '$email', '$pass', '$cpass')";
        
        $res = mysqli_query($conn,$sql);
        if($res){
            header("location:index.php");
          echo'  <div class="alert alert-primary" role="alert">
  Now you can Login!!
</div>';
        
    
    
    }
    }

 }

?>
