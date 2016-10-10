<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input'));
 $id = mysql_real_escape_string($data->id);
  $pid = mysql_real_escape_string($data->pid);
  $name = mysql_real_escape_string($data->name);
  $disease = mysql_real_escape_string($data->disease);
  $medicine = mysql_real_escape_string($data->medicine);
  $date = mysql_real_escape_string($data->date);
  $doctor_id = mysql_real_escape_string($data->doctor_id);


if (count($data) > 0) {

  //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


  $stmt = $dbConn->prepare("DELETE FROM patient_rec_tbl WHERE id=?");
  $stmt->bindValue(1, $id);




  $inserted = $stmt->execute();


  if ($inserted) {
      echo "Data Deleted: ID = " .$id. ", Patient ID = " .$pid. ", Disease = " .$disease. ", Medicine = " .$medicine. ", Date = " .$date. ", Doctor = " .$doctor_id ;
  }
  else {
    echo "Error";
  }

}



 ?>
