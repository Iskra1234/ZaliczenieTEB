<?php
  session_start();

  if (isset($_SESSION['logged']['email'])) {
    switch ($_SESSION['logged']['permission']) {
          case '1':
            header('location: ../logged/admin.php');
          break;

          case '2':
            header('location: ../logged/moderator.php');
            break;

          case '3':
            header('location: ../logged/user.php');
            break;
        }
        exit();
  }

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    require_once './connect.php';
    if ($conn->connect_errno != 0) {
      $_SESSION['error'] = 'Błąd połącznie z bazą danych';
      header('location: ../../index.php');
      exit();
    }

    $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    $pass = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

    $sql = sprintf("SELECT * FROM user WHERE email='%s'",
           mysqli_real_escape_string($conn, $email));

    if ($result = $conn->query($sql)) {
      $count = $result->num_rows;
      if ($count == 1) {
        $row=$result->fetch_assoc();
        $passdb = $row['password'];

        if (password_verify($pass, $passdb)) {
        if ($row['active'] == 0) {
          $_SESSION['error'] = 'Użytkownik jest nieaktywny!';
          header('location: ../../index.php');
          exit();
        }

        $_SESSION['logged']['permission'] = $row['permissionid'];
        $_SESSION['logged']['name'] = $row['name'];
        $_SESSION['logged']['surname'] = $row['surname'];
        $_SESSION['logged']['email'] = $row['email'];
        $_SESSION['logged']['avatar'] = $row['avatar'];

        $date = date("Y-m-d H:i:s");
        $email = $_SESSION['logged']['email'];
        $sql = "UPDATE `user` SET `last_login`= '$date' WHERE `email` = '$email'";

        $conn->query($sql);

        switch ($_SESSION['logged']['permission']) {
          case '1':
            header('location: ../logged/admin.php');
          break;

          case '2':
            header('location: ../logged/moderator.php');
            break;

          case '3':
            header('location: ../logged/user.php');
            break;
        }

        exit();
      }

      }
        $_SESSION['error'] = 'Podany login lub hasło jest błędne!';
        header('location: ../../index.php');
        exit();

    }else{
      echo "Błędne zapytanie!";
    }

  }else{
    $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    header('location: ../../index.php');
  }
  ?>
