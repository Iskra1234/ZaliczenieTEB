<?php
session_start();
if (!empty($_POST['pesel']) && !empty($_POST['Nazwa']) && !empty($_POST['country'])) {
  require_once 'connect.php';
  if ($conn->connect_errno != 0) {
    $_SESSION['error'] = 'Błąd połączenia z bazą danych';
    header('location: ../../index.php');
  }else{

    $pesel = $_POST['pesel'];
    $citizenship = $_POST['citizenship'];
    $Nazwa = $_POST['Nazwa'];
    $country = $_POST['country'];
    $email = $_SESSION['logged']['email'];

    $conn->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);

$conn->query("INSERT INTO userd_details(idcity, pesel, citizenship) VALUES ((SELECT id FROM city WHERE Nazwa = '".$Nazwa."'), '".$pesel."', '".$citizenship."')");
$conn->query("UPDATE user SET id_user_details = LAST_INSERT_ID() WHERE email = '".$email."'");
$conn->commit();
 $conn->close();
      header('location: ../../index.php');
    }
}
?>
