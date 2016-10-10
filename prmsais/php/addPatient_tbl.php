<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input',true));
  $name = mysql_real_escape_string($data->name);//$data -> $scope.p_add.name
  $add = mysql_real_escape_string($data->add);
  $mobile = mysql_real_escape_string($data->mobile);




    if (count($data) > 0) {

      //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


      $stmt = $dbConn->prepare("insert into patient_tbl (name,address,mobile) VALUES (?,?,?)");
      $stmt->bindValue(1, $name);
      $stmt->bindValue(2, $add);
      $stmt->bindValue(3, $mobile);


      $inserted = $stmt->execute();


      if ($inserted) {
        echo "Data Inserted : \nName= " .$name. "\n,Address= " .$add. "\n,Mobile= " .$mobile;
      }
      else {
        echo "Error";
      }

    }



 ?>
