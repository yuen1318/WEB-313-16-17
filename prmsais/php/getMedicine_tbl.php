<?php
    require 'dbConfig.php';

    try {
      if (!empty($dbConn)) {
        $stmt= $dbConn->query("SELECT * FROM medicine_tbl");
        $stmt ->execute();
        $data =array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $data[] = $row;

        }
        echo json_encode($data);
        $dbConn= NULL;
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }





 ?>
