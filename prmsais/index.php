<?php
session_start();
require 'php/dbConfig.php';

if (!empty($dbConn)) {
  if (isset($_POST['btn_login'])) {
    if (!empty($_POST['un']) && !empty($_POST['pw']) ) {
      $un =$_POST['un'];
      $pw =$_POST['pw'];

      $stmt = $dbConn->prepare("SELECT * FROM user_tbl WHERE id=? AND pw=?");
      $stmt->bindValue(1, $un);
      $stmt->bindValue(2, $pw);
      $stmt->execute();
      $count = $stmt->rowCount();
      $type = $stmt->fetchColumn(2);

      if ($count == 1 && $type == 'Receptionist') {
        echo $type;
          $_SESSION['username'] = $un;
          $_SESSION['password'] = $pw;
          $_SESSION['type'] = $type;
          header("Location:page.receptionist/receptionist.php");
      }

      if ($count == 1 && $type == 'Secretary') {
        echo $type;
          $_SESSION['username'] = $un;
          $_SESSION['password'] = $pw;
          $_SESSION['type'] = $type;
          header("Location:page.secretary/secretary.php");
      }

      if ($count == 1 && $type == 'Admin') {
        echo $type;
          $_SESSION['username'] = $un;
          $_SESSION['password'] = $pw;
          $_SESSION['type'] = $type;
          header("Location:page.admin/admin.php");
      }


    }
  }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <style media="screen">
    html {
      background: url(1.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      }
      label{color:white !important}
      input {color:white !important}
      i{cursor: pointer;}
      label{cursor: pointer !important;}
    </style>
  </head>
  <body >


    <div class="row">
      <div class="col s4 offset-s1">
        <div class="card" style="margin-top:100px; background:rgba(0, 0, 0, 0.5);">

          <div class="card-content">
            <form action="#" method="post">

            <div class="input-field">
              <input type="text" name="un" id="un">
              <label for="un"><i class="fa fa-user"></i>  Username</label>
            </div>


            <div class="input-field">
              <input type="password" name="pw" id="pw">
              <label for="pw"><i class="fa fa-key"></i>  Password</label>
            </div>

            <div class="input-field" style="height:40px !important">
              <button type="submit"  class="waves-effect btn blue darken-2 right" name="btn_login">Login</button>
              <a href="contact/dev.php">About Us</a>
            </div>

          </div>


        </div>
      </form>

      </div>
    </div>

    <script src="angularjs/angular.min.js"></script>
    <script src="angularjs/angular-route.min.js"></script>


    <script src="materialize/js/jquery.min.js"></script>
    <script src="materialize/js/jquery.validate.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script src="materialize/js/materialize.jquery.js"></script>


  </body>
</html>
