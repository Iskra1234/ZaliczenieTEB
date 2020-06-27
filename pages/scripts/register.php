<?php
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1']) && !empty($_POST['email2'])
   && !empty($_POST['password1']) && !empty($_POST['password2']) && $_POST['terms'] == 'agree') {
    require_once 'connect.php';
    if ($conn->connect_errno != 0) {
      $_SESSION['error'] = 'Błąd połączenia z bazą danych';
      header('location: ../../register.php');
    }else{

      if ($_POST['email1'] != $_POST['email2']) {
        $_SESSION['error'] = 'Podane adresy email się różnią.';
        header('location: ../../register.php');
        exit();
      }

      if ($_POST['password1'] != $_POST['password2']) {
        $_SESSION['error'] = 'Podane hasła nie są jednakowe.';
        header('location: ../../register.php');
        exit();
      }


      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $email1 = $_POST['email1'];
      $password1 = $_POST['password1'];

      $permission = 3;
      $avatar = "avatar.jpg";

      $password = password_hash($password1, PASSWORD_ARGON2ID);


      $sql = "INSERT INTO `user`(`permissionid`, `name`, `surname`, `email`, `password`, `avatar`) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssssss", $permission, $name, $surname, $email1, $password, $avatar);

      if ($stmt->execute()) {
        $hash = hash('md5', $email1);

        $MAIL = <<<MAIL
        Dzień Dobry! $name $surname, oto informacje o Twoim koncie!

        Login: $email1
        Hasło: {$_POST['password1']}

        Aktywuj swoje konto klikając w poniższy link:
        http://localhost/adminlte/pages/scripts/activate.php?aid={$email1}&hash={$hash}
MAIL;
        mail($email1, 'Hello There!', $MAIL, 'From: inga.cerba@gmail.com');
        header("location: ../../index.php?register=success");
        exit();
      }else{
        $_SESSION['error'] = 'Nie udało się dodać nowego użytkownika!';
        header('location: ../../register.php');
        exit();
      }

      $stmt->close();
      $conn->close();
    }
  }else{
    $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    header('location: ../../register.php');
  }
?>
