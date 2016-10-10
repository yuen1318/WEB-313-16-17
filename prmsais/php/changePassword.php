<?php
session_start();
require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input'));
 $user = mysql_real_escape_string($data->user);



if (count($data) > 0) {

  $stmt = $dbConn->prepare("UPDATE user_tbl SET pw=:pw WHERE id=:id AND type=:type ");
  $stmt->bindValue(':pw', $user);
  $stmt->bindValue('id', $_SESSION['username']);
  $stmt->bindValue('type', $_SESSION['type']);
  $stmt->execute();
  echo $_SESSION['username'];
  echo $_SESSION['password'];
  echo $_SESSION['type'];



}
else {
  echo "string";
}


 ?>
