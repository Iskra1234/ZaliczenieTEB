<?php
  session_start();
  require_once 'connect.php';


  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['year'])) {

      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $year = $_POST['year'];

      $sql = "SELECT * FROM elections WHERE year = '$year'";
      $result = $conn->query($sql);

      $count = $result->num_rows;


      if ($count = 1) {
      $elections = $result->fetch_assoc();

      $elections_id = $elections['id'];

      $sql = "INSERT INTO `candidates` (`name`, `surname`, `elections_id`) VALUES ('$name', '$surname', '$elections_id')";

      if($result = $conn->query($sql)){
        header ('location: ../logged/wybory-admin.php?candidate=success');
      }else{
        header ('location: ../logged/wybory-admin.php');
        $_SESSION['error'] = "Nie udało się dodać kondydata!";
      }
    }else{
      header ('location: ../logged/wybory-admin.php');
      $_SESSION['error'] = "Nie udało się dodać użytkownika!";

    }
  }else{
    header ('location: ../logged/wybory-admin.php');
    $_SESSION['error'] = "Uzupełnij wszystkie pola!";
  }
?>

<?php
  // session_start();
  // require_once("connect.php");
  // if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['year'])) {
  //     $name = $_POST['name'];
  //     $surname = $_POST['surname'];
  //     $year = $_POST['year'];
  //     $sql = "SELECT * FROM elections WHERE year = '$year'";
  //     $result = $conn->query($sql);
  //     $count = $result->num_rows;​
  //     if ($count = 1) {
  //     $elections = $result->fetch_assoc();
  //     $elections_id = $elections['id'];
  //     $sql = "INSERT INTO `candidates` (`name`, `surname`, `elections_id`) VALUES ('$name', '$surname', '$elections_id ')";
  //     if($result = $conn->query($sql)){
  //       header ('location: ../logged/wybory-admin.php?candidate=success');
  //     }else{
  //       header ('location: ../logged/wybory-admin.php');
  //       $_SESSION['error'] = "Nie udało się dodać kondydata!";
  //     }
  //   }else{
  //     header ('location: ../logged/wybory-admin.php');
  //     $_SESSION['error'] = "Nie udało się dodać użytkownika!";
  //   }
  // }else{
  //   header ('location: ../logged/wybory-admin.php');
  //   $_SESSION['error'] = "Uzupełnij wszystkie pola!";
  // }
?>
