<?php
session_start();
  if (isset($_SESSION['logged']['email'])) {
      session_destroy();
      header('location: ../../index.php?logout=success');
      exit();
  }
?>
