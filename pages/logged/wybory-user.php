<?php
session_start();
require_once '../scripts/connect.php';
    $email = $_SESSION['logged']['email'];
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $id = $user['userid'];
    $sql = "SELECT * FROM candidates";
    $result = $conn->query($sql);
    echo <<<VOTE
    <div class="col-md-4">
        <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Wybierz kandydata, na którego chcesz zagłosować:</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="../../scripts/vote.php" method="post" enctype='multipart/form-data' role="form">
        <div class="card-body">
        <div class="form-group">
          <input type="hidden" name="user" value="$id">
        </div>
VOTE;
    while ($candidate = $result->fetch_assoc()){
      echo <<<VOTE
        <div class="form-group">
          <input type="radio" name="candidate" value="$candidate[id]">
          <label>  $candidate[name] $candidate[surname]</label>
        </div>
VOTE;
}
    echo <<<VOTE
      <div class="card-footer" style="text-align:center">
        <button type="submit" name='vote' class="btn btn-primary">Głosuj</button>
      </div>
VOTE;
?>
