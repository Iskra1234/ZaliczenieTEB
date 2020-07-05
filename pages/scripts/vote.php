<?php
session_start();
require_once('connect.php');
$sql1 = "SELECT userid FROM user WHERE email = '".$_SESSION['logged']['email']."'";
$conn->query($sql1);
$result=$conn->query($sql1);
$row = $result->fetch_assoc();


$sql2 = "INSERT INTO `user`(`idcandidate`, `iduser`) VALUES ($_POST['candidate'], $row['userid'])";


if($conn->query($sql2)){
  header('location: login.php');
}





 ?>
