<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
$data = json_decode(file_get_contents('php://input'));
$batch_no = mysql_real_escape_string($data->batch_no);
$brand_name = mysql_real_escape_string($data->brand_name);
$manufacturer = mysql_real_escape_string($data->manufacturer);
$preparation = mysql_real_escape_string($data->preparation);
$classification = mysql_real_escape_string($data->classification);
$dosage = mysql_real_escape_string($data->dosage);
$unit = mysql_real_escape_string($data->unit);
$expiry_date = mysql_real_escape_string($data->expiry_date);
$quantity = mysql_real_escape_string($data->quantity);


if (count($data) > 0) {

  //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";


  $stmt = $dbConn->prepare("DELETE FROM medicine_tbl WHERE batch_no=?");

  $stmt->bindValue(1, $batch_no);




  $inserted = $stmt->execute();


  if ($inserted) {
    echo "Data Deleted: Batch No = " .$batch_no. ", Brand Name = " .$brand_name. ", Manufacturer = " .$manufacturer. ", Preparation = " .$preparation. ", Classification = " .$classification. ", Dosage = " .$dosage. ", Unit = " .$unit. ", Expiry Date = " .$expiry_date. ", Quantity = " .$quantity ;
  }
  else {
    echo "Error";
  }

}



 ?>
