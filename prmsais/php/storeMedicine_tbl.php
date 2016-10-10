<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input'));
 $batch_no = mysql_real_escape_string($data->batch_no);
 $quantity = mysql_real_escape_string($data->quantity);
$store = mysql_real_escape_string($data->store);



if (count($data) > 0) {

  //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";
  $stmt = $dbConn->prepare("SELECT * FROM medicine_tbl WHERE batch_no= ?");
  $stmt->bindValue(1, $batch_no);
  $stmt->execute();
  $amount = $stmt->fetchColumn(8);

    try {
      if ($store != 0) {
        $stmt = $dbConn->prepare("UPDATE medicine_tbl SET quantity=? WHERE batch_no= $batch_no ");
        $stmt->bindValue(1, $amount + $store);
        $stmt->execute();
        echo "Medicine Stored: Batch No = " .$batch_no. ", Quantity Stored = " .$store ;
        }
    } catch (Exception $e) {
      echo "Error";
    }



}





 ?>
