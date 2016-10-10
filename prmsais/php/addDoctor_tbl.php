<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input',true));
  $id = mysql_real_escape_string($data->id);//$data -> $scope.p_add.name
  $name = mysql_real_escape_string($data->name);
  $medical_title = mysql_real_escape_string($data->medical_title);




    if (count($data) > 0) {

      //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


      $stmt = $dbConn->prepare("INSERT INTO doctor_tbl VALUES (?,?,?)");
      $stmt->bindValue(1, $id);
      $stmt->bindValue(2, $name);
      $stmt->bindValue(3, $medical_title);


      $inserted = $stmt->execute();


      if ($inserted) {
        echo "Data Inserted : Doctor ID = " .$id. ", Name = " .$name. ", Medical Title = ", $medical_title;
      }
      else {
        echo "Error";
      }

    }



 ?>
