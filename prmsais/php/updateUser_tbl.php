<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input',true));
  $id = mysql_real_escape_string($data->id);//$data -> $scope.p_add.name
  $pw = mysql_real_escape_string($data->pw);
  $type = mysql_real_escape_string($data->type);




    if (count($data) > 0) {

      //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


      $stmt = $dbConn->prepare("UPDATE user_tbl SET pw=?, type=? WHERE id=? ");


      $stmt->bindValue(1, $pw);
      $stmt->bindValue(2, $type);
      $stmt->bindValue(3, $id);


      $inserted = $stmt->execute();


      if ($inserted) {
        echo "Data Updated : User ID = " .$id. ", Password = " .$pw. ", Accessability = " .$type;
      }
      else {
        echo "Error";
      }

    }



 ?>
