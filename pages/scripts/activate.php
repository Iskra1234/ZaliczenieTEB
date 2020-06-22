<?php
   require_once("connect.php");
   Session_start();
   $sql = "SELECT email, active FROM user WHERE email='{$_GET['aid']}'";
   $result = $conn->query($sql);

    if (mysqli_num_rows($result)==0) {
      $_SESSION['error'] = 'FCKU';
      header("location: ../../login.php");
    }else{
         $row = $result->fetch_assoc();
         $hash = hash('md5', $row['email']);

         if ($hash == $_GET['hash']){
           $sql = "UPDATE user SET active='1' WHERE email='{$_GET['aid']}'";
           $conn->query($sql);
           header("location: ../../login.php?active=success");
   }
}


 ?>
