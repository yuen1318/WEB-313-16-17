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


  $stmt = $dbConn->prepare("DELETE FROM patient_tbl WHERE id=:id");

  $stmt->bindValue(':id',$id);




  $inserted = $stmt->execute();


  if ($inserted) {
    echo "Data Deleted: \n Patient ID= " .$id. "\n ,Name= " .$name. "\n ,Address= " .$add. "\n ,Mobile= " .$mobile;
  }
  else {
    echo "Error";
  }

}



 ?>
