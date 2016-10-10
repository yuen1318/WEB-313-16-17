<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input'));
 $id = mysql_real_escape_string($data->id);
  $name = mysql_real_escape_string($data->name);
  $add = mysql_real_escape_string($data->add);
  $mobile = mysql_real_escape_string($data->mobile);


if (count($data) > 0) {

  //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


  $stmt = $dbConn->prepare("UPDATE patient_tbl SET name=:name, address=:address , mobile=:mobile WHERE id=:id");

  $stmt->bindValue(':id',$id);
  $stmt->bindValue(':name',$name);
  $stmt->bindValue(':address',$add);
  $stmt->bindValue(':mobile',$mobile);



  $inserted = $stmt->execute();


  if ($inserted) {
      echo "Data Updated: \n Patient ID= " .$id. "\n ,Name= " .$name. "\n ,Address= " .$add. "\n ,Mobile= " .$mobile;
  }
  else {
    echo "Error";
  }

}



 ?>
