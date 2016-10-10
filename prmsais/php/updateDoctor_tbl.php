<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input',true));
  $id = mysql_real_escape_string($data->id);//$data -> $scope.p_add.name
  $name = mysql_real_escape_string($data->name);
  $medical_title = mysql_real_escape_string($data->medical_title);




    if (count($data) > 0) {

      //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


      $stmt = $dbConn->prepare("UPDATE doctor_tbl SET name=?, medical_title=? WHERE id=? ");
      $stmt->bindValue(3, $id);
      $stmt->bindValue(1, $name);
      $stmt->bindValue(2, $medical_title);


      $inserted = $stmt->execute();


      if ($inserted) {
        echo "Data Updated : Doctor ID = " .$id. ", Name = " .$name. ", Medical Title = ", $medical_title;
      }
      else {
        echo "Error";
      }

    }



 ?>
