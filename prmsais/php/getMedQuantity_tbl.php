<?php

require 'dbConfig.php';
//$connect =mysqli_connect('localhost', 'root', '');
 $data = json_decode(file_get_contents('php://input'));
 $batch_no = mysql_real_escape_string($data->batch_no);
 $quantity = mysql_real_escape_string($data->quantity);
  $get = mysql_real_escape_string($data->get);



if (count($data) > 0) {

  //$query = "INSERT INTO patient_tbl(name,address,mobile) VALUES('$p_name', '$p_add', '$p_mobile')";
  $stmt = $dbConn->prepare("SELECT * FROM medicine_tbl WHERE batch_no= $batch_no");
  $stmt->execute();
  $amount = $stmt->fetchColumn(8);


  if ($amount > $get) {
      try {
        $stmt = $dbConn->prepare("UPDATE medicine_tbl SET quantity=? WHERE batch_no= $batch_no ");
        $stmt->bindValue(1, $amount - $get);
        $stmt->execute();
        echo "Medicine Get: Batch No = " .$batch_no. ", Quantity Get = " .$get ;
      } catch (Exception $e) {
      echo $e->getMessage();
      }
  }

  else {
    echo "Insufficient Amount Stored in Medicine";
  }

}





 ?>
